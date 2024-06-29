<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Gate;

class FilmController extends Controller
{
    // Display a listing of the resource.
    public function index(Request $request)
    {
        $perPage = $request->perpage ?? 2; // Значение по умолчанию, если параметр не указан
        $films = Film::paginate($perPage);
        return view('films.index', compact('films', 'perPage'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('films.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required|integer',
            'genre' => 'nullable|string',
            'price' => 'nullable|numeric' // Валидация для поля цены
        ]);

        $film = new Film($validated);
        $film->save();

        return redirect()->route('films.index');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        return view('films.show', ['film' => Film::findOrFail($id)]);
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);

        $film = Film::findOrFail($id);
        $film->update($request->all());
        return redirect()->route('films.index')->with('success', 'Фильм обновлен успешно');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);

        if (!Gate::allows('delete-film', $film)) {
            return redirect('/error')->with('error', 'У вас нет разрешения на удаление этого фильма');
        }

        $film->delete();
        return redirect()->route('films.index')->with('success', 'Фильм успешно удален');
    }

}

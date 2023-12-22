<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));
    }

    public function create()
    {
        // Se precisar de alguma lógica antes de criar um novo jogo
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_game' => 'required|string',
            'sport_id' => 'required|exists:sports,id',
            'is_live' => 'required|boolean',
            'game_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $game = Game::create($request->all());

        if ($request->hasFile('game_image')) {
            $imagePath = $request->file('game_image')->store('game_images', 'public');
            $game->update(['game_image' => $imagePath]);
        }

        return redirect()->route('games.index')->with('success', 'Game created successfully!');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_game' => 'required|string',
            'sport_id' => 'required|exists:sports,id',
            'is_live' => 'required|boolean',
            'game_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $game = Game::findOrFail($id);
        $game->update($request->all());

        if ($request->hasFile('game_image')) {
            $imagePath = $request->file('game_image')->store('game_images', 'public');
            $game->update(['game_image' => $imagePath]);
        }

        return redirect()->route('games.index')->with('success', 'Game updated successfully!');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
    }
}

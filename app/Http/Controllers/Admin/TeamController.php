<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamExpert;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = TeamExpert::latest()->get();

        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoName = null;

        if ($request->hasFile('photo')) {

            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(
                public_path('uploads/team'),
                $photoName
            );
        }

        TeamExpert::create([
            'name' => $request->name,
            'role' => $request->role,
            'bio' => $request->bio,
            'photo' => $photoName,
        ]);

        return redirect()
            ->route('team.index')
            ->with('success', 'Team berhasil ditambahkan');
    }

    public function edit($id)
    {
        $team = TeamExpert::findOrFail($id);

        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = TeamExpert::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'bio' => 'required',
        ]);

        $photoName = $team->photo;

        if ($request->hasFile('photo')) {

            $photoName = time() . '.' . $request->photo->extension();

            $request->photo->move(
                public_path('uploads/team'),
                $photoName
            );
        }

        $team->update([
            'name' => $request->name,
            'role' => $request->role,
            'bio' => $request->bio,
            'photo' => $photoName,
        ]);

        return redirect()
            ->route('team.index')
            ->with('success', 'Team berhasil diupdate');
    }

    public function destroy($id)
    {
        $team = TeamExpert::findOrFail($id);

        $team->delete();

        return redirect()
            ->route('team.index')
            ->with('success', 'Team berhasil dihapus');
    }
}
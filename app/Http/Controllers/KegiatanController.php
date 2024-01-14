<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("kegiatan.index", [
            'kegiatans' => Kegiatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("kegiatan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'cover' => 'image|file|max:2048',
        ]);
        if ($request->file('cover')) {
            $validated['cover'] = $request->file('cover')->store('kegiatan-cover');
        }
        $validated['member_id'] = auth()->user()->id;
        Kegiatan::create($validated);
        return redirect('/kegiatan')->with('success', 'New kegiatan has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', [
            'kegiatan' => $kegiatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if ($request->file('cover')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['cover'] = $request->file('cover')->store('kegiatan-cover');
        }
        Kegiatan::where('id', $kegiatan->id)->update($validated);
        return redirect('/kegiatan')->with('success', 'Kegiatan has been edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if ($kegiatan->cover) {
            Storage::delete($kegiatan->cover);
        }
        Kegiatan::destroy($kegiatan->id);
        return redirect('/kegiatan')->with('success', 'Kegiatan has been deleted successfully');
    }
}

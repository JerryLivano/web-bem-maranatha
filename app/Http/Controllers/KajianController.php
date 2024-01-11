<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kajian = Kajian::all();
        return view('kajian.index',[
            "kajians" => $kajian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kajian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'cover' => 'image|file|max:2048',
            'file' => 'mimes:pdf|max:10240', 
        ]);
        if($request->file('cover')){
            $validated['cover'] =$request->file('cover')->store('kajian-cover');
        }
        if($request->file('file')){
            $validated['file'] =$request->file('file')->store('kajian-file');
        }
        $validated['member_id'] = auth()->user()->id;
        Kajian::create($validated);
        return redirect('/kajians')->with('success', 'New kajian has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kajian $kajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kajian $id)
    {
        if($id->user->id !== auth()->user()->id) {
            abort(403);
       }
        return view('kajian.edit', [
            'kajian' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kajian $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'cover' => 'image|file|max:2048',
            'file' => 'mimes:pdf|max:10240', 
        ]);
        
        if($request->file('cover')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['cover'] =$request->file('cover')->store('kajian-cover');
        }
        if($request->file('file')){
            if($request->oldFile){
                Storage::delete($request->oldFile);
            }
            $validated['file'] =$request->file('file')->store('book-file');
        }
        Kajian::where('id', $id->id)->update($validated);
        return redirect('/kajians')->with('success', 'Kajian has been edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kajian $id)
    {
        if($id->cover){
            Storage::delete($id->cover);
        }
        if($id->file){
            Storage::delete($id->file);
        }
        Kajian::destroy($id->id);
        return redirect('/kajians')->with('success', 'Kajian has been deleted');
    }
}

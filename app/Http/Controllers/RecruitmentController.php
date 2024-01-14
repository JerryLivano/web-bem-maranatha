<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreRecruitmentRequest;
use App\Http\Requests\UpdateRecruitmentRequest;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $faculties = Faculty::all();
        $departments = Department::all();
        $recruitments = Recruitment::all();
        if(auth()->user()){
            return view('pendaftaran.member',[
            'recruitments' => $recruitments
            ]);
        }else{

            return view('pendaftaran.index',[
                'faculties' => $faculties,
                'departments' => $departments
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'nrp' => 'required|max:255|unique:recruitments',
            'email' => 'required|email|unique:recruitments',
            'telephone' => 'required|max:255',
            'birthdate' => 'required',
            'gender' => 'required',
            'faculty_id' => 'required',
            'angkatan' => 'required',
            'department_id' => 'required',
            'alasan' => 'required|max:255',
            'department_id2' => 'required',
            'alasan2' => 'required|max:255',
            'transkrip' => 'mimes:pdf|max:10240', 
            'cv' => 'mimes:pdf|max:10240',
            'rekomKetua' => 'mimes:pdf|max:10240',
            'osjur' => 'mimes:pdf|max:10240',
            'wiratha' => 'mimes:pdf|max:10240',
            'porto' => 'mimes:pdf|max:10240'
        ]);
        if($request->file('transkrip')){
            $validated['transkrip'] =$request->file('transkrip')->store('recruitment-transkrip');
        }
        if($request->file('cv')){
            $validated['cv'] =$request->file('cv')->store('recruitment-cv');
        }
        if($request->file('rekomKetua')){
            $validated['rekomKetua'] =$request->file('rekomKetua')->store('recruitment-rekomKetua');
        }
        if($request->file('osjur')){
            $validated['osjur'] =$request->file('osjur')->store('recruitment-osjur');
        }
        if($request->file('wiratha')){
            $validated['wiratha'] =$request->file('wiratha')->store('recruitment-wiratha');
        }
        if($request->file('porto')){
            $validated['porto'] =$request->file('porto')->store('recruitment-porto');
        }
        Recruitment::create($validated);
        return view('pendaftaran.end');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recruitment $recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recruitment $id)
    {
        $validated['status'] ="1";
        Recruitment::where('id', $id->id)->update($validated);
        return redirect('/recruitment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recruitment $recruitment)
    {
        //
    }
}

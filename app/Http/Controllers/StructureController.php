<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        return view('struktur.index', [
            'bphs' => User::where('department_id', 1)->get(),
            'sekres' => User::where('department_id', 2)->get(),
            'ksps' => User::where('department_id', 3)->get(),
            'iks' => User::where('department_id', 4)->get(),
            'pms' => User::where('department_id', 5)->get(),
            'kps' => User::where('department_id', 6)->get(),
            'sphs' => User::where('department_id', 7)->get(),
            'psdos' => User::where('department_id', 8)->get(),
            'mbs' => User::where('department_id', 9)->get(),
            'ps' => User::where('department_id', 10)->get(),
            'hlus' => User::where('department_id', 11)->get(),
        ]);
    }
}

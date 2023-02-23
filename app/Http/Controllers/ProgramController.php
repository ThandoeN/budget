<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    //
    function getData()
    {
        return Program::all();
    }

    function index()
    {
        return Program::find(1)->getDepartment;
    }

    function operations()
    {
        return DB::table('programs')->sum('id');
    }
}

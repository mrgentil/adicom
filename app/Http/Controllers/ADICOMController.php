<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;

class ADICOMController extends Controller
{
    public function academie()
    {
        $academies = Academy::query()
            ->orderBy('id', 'desc');

        return view('adicom.academy',compact('academies'));
    }

    public function awards()
    {
        return view('adicom.awards');
    }

    public function forum()
    {
        return view('adicom.forum');
    }

    public function good()
    {
        return view('adicom.goog');
    }

    public function watch()
    {
        return view('adicom.watch');
    }

    public function podcast()
    {
        return view('adicom.podcast');
    }
}

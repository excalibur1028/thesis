<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TreatmentsController extends Controller
{
    /**
     * Display listing of the treatments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $treatments = Treatment::with('collections')->get();

        return view('pages.treatments.index', compact('treatments'));
    }

    /**
     * Display specified treatment.
     *
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $treatment = Treatment::whereSlug($slug)->firstOrFail();

        return view('pages.treatments.show', compact('treatment'));
    }
}

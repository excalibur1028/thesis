<?php

namespace App\Http\Controllers;

use App\Material;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialsController extends Controller
{
    public function show($collectionSlug, $materialSlug)
    {
        $material = Material::with(['collection' => function($query) use ($collectionSlug)
        {
            $query->whereSlug($collectionSlug)->firstOrFail();
        }])->whereSlug($materialSlug)->firstOrFail();

        return view('pages.materials.show', compact('material'));
    }
}

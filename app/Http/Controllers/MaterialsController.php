<?php

namespace App\Http\Controllers;

use App\Models\Materials;

class MaterialsController extends Controller
{
    public function index()
    {
        return view('material');
    }

    public function showMaterialList(Materials $materials)
    {
        $materials = Materials::all();
        return view('pages.material', compact('materials'));
    }

}

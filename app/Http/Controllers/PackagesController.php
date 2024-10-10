<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('packages.index', [
            'packages' => $packages
        ]);
    }

    public function show(int $id)
    {
        $package = Package::findOrFail($id);

        return view('packages.show', [
            'package' => $package
        ]);
    }
}

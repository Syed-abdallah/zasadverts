<?php
// App/Http/Controllers/FrontPortfolioController.php

namespace App\Http\Controllers;

use App\Models\FrontPortfolio;
use Illuminate\Http\Request;

class FrontPortfolioController extends Controller
{
    public function index()
    {
        $frontportfolios = FrontPortfolio::latest()->paginate(10);
        return view('dashboard.admin.frontportfolio.index', compact('frontportfolios'));
    }

    public function create()
    {
        return view('dashboard.admin.frontportfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('frontportfolios'), $imageName);

        FrontPortfolio::create([
            'image' => 'frontportfolios/' . $imageName,
        ]);

        return redirect()->route('frontportfolio.index')->with('success', 'Front Portfolio created successfully.');
    }

    public function show(FrontPortfolio $frontportfolio)
    {
        return view('dashboard.admin.frontportfolio.show', compact('frontportfolio'));
    }

    public function edit(FrontPortfolio $frontportfolio)
    {
        return view('dashboard.admin.frontportfolio.edit', compact('frontportfolio'));
    }

    public function update(Request $request, FrontPortfolio $frontportfolio)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('image')) {
            // delete old image
            if ($frontportfolio->image && file_exists(public_path($frontportfolio->image))) {
                unlink(public_path($frontportfolio->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontportfolios'), $imageName);

            $data['image'] = 'frontportfolios/' . $imageName;
        }

        $frontportfolio->update($data);

        return redirect()->route('frontportfolio.index')->with('success', 'Front Portfolio updated successfully.');
    }

    public function destroy(FrontPortfolio $frontportfolio)
    {
        if ($frontportfolio->image && file_exists(public_path($frontportfolio->image))) {
            unlink(public_path($frontportfolio->image));
        }

        $frontportfolio->delete();
        return redirect()->route('frontportfolio.index')->with('success', 'Front Portfolio deleted successfully.');
    }
}

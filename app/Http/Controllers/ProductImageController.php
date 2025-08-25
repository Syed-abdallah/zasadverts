<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function index()
    {
        $productimages = ProductImage::latest()->paginate(10);
        return view('dashboard.admin.productimages.index', compact('productimages'));
    }

    public function create()
    {
        return view('dashboard.admin.productimages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('productimages'), $imageName);

        ProductImage::create([
            'image' => 'productimages/' . $imageName,
        ]);

        return redirect()->route('productimages.index')->with('success', 'Product image created successfully.');
    }

    public function show(ProductImage $productimage)
    {
        return view('dashboard.admin.productimages.show', compact('productimage'));
    }

    public function edit(ProductImage $productimage)
    {
        return view('dashboard.admin.productimages.edit', compact('productimage'));
    }

    public function update(Request $request, ProductImage $productimage)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('image')) {
            if ($productimage->image && file_exists(public_path($productimage->image))) {
                unlink(public_path($productimage->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('productimages'), $imageName);

            $data['image'] = 'productimages/' . $imageName;
        }

        $productimage->update($data);

        return redirect()->route('productimages.index')->with('success', 'Product image updated successfully.');
    }

    public function destroy(ProductImage $productimage)
    {
        if ($productimage->image && file_exists(public_path($productimage->image))) {
            unlink(public_path($productimage->image));
        }

        $productimage->delete();
        return redirect()->route('productimages.index')->with('success', 'Product image deleted successfully.');
    }
}

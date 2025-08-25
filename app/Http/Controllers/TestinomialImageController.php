<?php

namespace App\Http\Controllers;
use App\Models\TestinomialImage;
use Illuminate\Http\Request;

class TestinomialImageController extends Controller
{
public function index()
    {
        $testinomialimages = TestinomialImage::latest()->paginate(10);
        return view('dashboard.admin.testinomialimage.index', compact('testinomialimages'));
    }

    public function create()
    {
        return view('dashboard.admin.testinomialimage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('productimages'), $imageName);

        TestinomialImage::create([
            'image' => 'productimages/' . $imageName,
        ]);

        return redirect()->route('testinomialimages.index')->with('success', 'Product image created successfully.');
    }

    public function show(TestinomialImage $testinomialimages)
    {
        return view('dashboard.admin.testinomialimages.show', compact('testinomialimages'));
    }

    public function edit(TestinomialImage $testinomialimage)
    {
        return view('dashboard.admin.testinomialimage.edit', compact('testinomialimage'));
    }

    public function update(Request $request, TestinomialImage $testinomialimage)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('image')) {
            if ($testinomialimage->image && file_exists(public_path($testinomialimage->image))) {
                unlink(public_path($testinomialimage->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('testinomialimages'), $imageName);

            $data['image'] = 'testinomialimages/' . $imageName;
        }

        $testinomialimage->update($data);

        return redirect()->route('testinomialimages.index')->with('success', 'Product image updated successfully.');
    }

    public function destroy(Testinomialimage $testinomialimages)
    {
        if ($testinomialimages->image && file_exists(public_path($testinomialimages->image))) {
            unlink(public_path($testinomialimages->image));
        }
     

        $testinomialimages->delete();
       
        return redirect()->route('testinomialimages.index')->with('success', 'Product image deleted successfully.');
    }

}
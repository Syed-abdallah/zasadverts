<?php
// App/Http/Controllers/SpotlightController.php
namespace App\Http\Controllers;

use App\Models\Spotlight;
use Illuminate\Http\Request;

class SpotlightController extends Controller
{
    public function index()
    {
        $spotlights = Spotlight::latest()->paginate(10);
        return view('dashboard.admin.spotlight.index', compact('spotlights'));
    }

    public function create()
    {
        return view('dashboard.admin.spotlight.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
  
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('spotlights'), $imageName);

        Spotlight::create([
      
            'image' => 'spotlights/' . $imageName,
        ]);

        return redirect()->route('spotlight.index')->with('success', 'Spotlight created successfully.');
    }

    public function show(Spotlight $spotlight)
    {
        return view('dashboard.admin.spotlight.show', compact('spotlight'));
    }

    public function edit(Spotlight $spotlight)
    {
        return view('dashboard.admin.spotlight.edit', compact('spotlight'));
    }

    public function update(Request $request, Spotlight $spotlight)
    {
        $request->validate([

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        if ($request->hasFile('image')) {
            // delete old image
            if ($spotlight->image && file_exists(public_path($spotlight->image))) {
                unlink(public_path($spotlight->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('spotlights'), $imageName);

            $data['image'] = 'spotlights/' . $imageName;
        }

        $spotlight->update($data);

        return redirect()->route('spotlight.index')->with('success', 'Spotlight updated successfully.');
    }

    public function destroy(Spotlight $spotlight)
    {
        if ($spotlight->image && file_exists(public_path($spotlight->image))) {
            unlink(public_path($spotlight->image));
        }

        $spotlight->delete();
        return redirect()->route('spotlight.index')->with('success', 'Spotlight deleted successfully.');
    }
}

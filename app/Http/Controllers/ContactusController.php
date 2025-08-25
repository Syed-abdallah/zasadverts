<?php

namespace App\Http\Controllers;
use App\Models\Lead;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
           $validated =  $request->validate([
            'first_name' => 'required|string|max:255',
            'email'      => 'required|email',
              'Services_Name__c' => 'nullable|array',   // ✅ validate as array
        'Services_Name__c.*' => 'string|max:255', // ✅ validate each value
            'products'   => 'nullable|string',
            'asin_url'   => 'nullable|string',
            'phone'      => 'required|string',
            'budget'     => 'nullable|string',
            'additional_comments' => 'nullable|string',
        ]);

            // Convert array into a comma-separated string (for storing in DB)
    if ($request->has('Services_Name__c')) {
        $validated['Services_Name__c'] = implode(',', $request->Services_Name__c);
    }
       Lead::create($validated);

        // Or just return success message
        return back()->with('success', 'Form submitted successfully!');
    }
}

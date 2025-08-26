<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    // ✅ Show all leads
    public function index()
    {
        $leads = Lead::latest()->get();
        // view path inside folder
        return view('dashboard.admin.leads.index', compact('leads'));
    }

    // ✅ Show single lead
    public function show($id)
    {
        $lead = Lead::findOrFail($id);
        return view('dashboard.admin.leads.show', compact('lead'));
    }

    // ✅ Store lead (your original code)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email'      => 'required|email',
            'Services_Name__c' => 'nullable|array',
            'Services_Name__c.*' => 'string|max:255',
            'products'   => 'nullable|string',
            'asin_url'   => 'nullable|string',
            'phone'      => 'required|string',
            'budget'     => 'nullable|string',
            'additional_comments' => 'nullable|string',
        ]);

        if ($request->has('Services_Name__c')) {
            $validated['Services_Name__c'] = implode(',', $request->Services_Name__c);
        }

        Lead::create($validated);

        return back()->with('success', 'Form submitted successfully!');
    }
}

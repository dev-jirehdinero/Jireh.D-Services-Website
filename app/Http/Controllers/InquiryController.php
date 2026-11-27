<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Storage;

class InquiryController extends Controller
{
    // 1. Show the Contact Form
    public function create()
    {
        return view('contact');
    }

    // 2. Validate & Save Form Submission
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name'       => 'required|string|min:2|max:100',
    //         'email'      => 'required|email|max:150',
    //         'subject'    => 'required|string|max:100',
    //         'message'    => 'required|string|min:10|max:2000',
    //         'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
    //     ]);

    //     // Handle optional file upload
    //     if ($request->hasFile('attachment')) {
    //         $validated['attachment'] = $request->file('attachment')->store('attachments', 'public');
    //     }

    //     Inquiry::create($validated);

    //     return redirect()
    //         ->route('contact.create')
    //         ->with('success', 'Thank you! Your message has been sent.');
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'email'      => 'required|email|max:150',
            'service'    => 'required|string|max:100',
            'message'    => 'required|string|min:5|max:2000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        if ($request->hasFile('attachment')) {
            $validated['attachment_path'] = $request->file('attachment')->store('inquiries', 'public');
        }

        Inquiry::create($validated);

        return redirect()->route('contact')->with('success', 'Thank you! Your inquiry has been sent.');
    }

    // 3. List All Messages (with optional search & pagination)
    public function index(Request $request)
    {
        $search = $request->input('search');

        $inquiries = Inquiry::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhere('subject', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10);

        return view('inquiries.index', compact('inquiries', 'search'));
    }

    // 4. Delete a Message & Clean Up Its File
    public function destroy(Inquiry $inquiry)
    {
        if ($inquiry->attachment_path) {
            Storage::disk('public')->delete($inquiry->attachment_path);
        }

        $inquiry->delete();

        return redirect()
            ->route('admin.inquiries')
            ->with('success', 'Inquiry deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'document_type' => 'required|string|in:national_id,driving_license,passport',
            'document' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Store the uploaded document
        $documentPath = $request->file('document')->store('verification_documents', 'public');

        // Update the user's document type and document path
        $user = new \App\Models\Document();
        $user->document_type = $request->document_type;
        $user->document_path = $documentPath;
        $user->user_id = auth()->user()->id;
        $user->status='pending';
        auth()->user()->doc_verify='1';
        auth()->user()->save();
        $user->save();

        // Redirect or respond with a success message
        return redirect()->back()->with('success', 'Document uploaded successfully. Your account will be verified soon.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        return response()->json($listings);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'rent' => 'required|numeric',
            'contact_number' => 'required|string|max:20',
        ]);

        $listing = Listing::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'rent' => $request->rent,
            'contact_number' => $request->contact_number,
        ]);

        return response()->json(['message' => 'Listing created successfully', 'listing' => $listing], 201);
    }

    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return response()->json($listing);
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        if ($listing->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            'rent' => 'numeric',
            'contact_number' => 'string|max:20',
        ]);

        $listing->update($request->all());
        return response()->json(['message' => 'Listing updated successfully', 'listing' => $listing]);
    }

    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        if ($listing->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $listing->delete();
        return response()->json(['message' => 'Listing deleted successfully']);
    }
}

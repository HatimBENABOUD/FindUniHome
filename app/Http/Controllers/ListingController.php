<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return response()->json(Listing::all(), 200);
    }

    public function show($id)
    {
        $listing = Listing::find($id);
        return $listing ? response()->json($listing, 200) : response()->json(['message' => 'Listing not found'], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'rent' => 'required|numeric',
            'contact_number' => 'required|string',
            'images' => 'required|json',
            'status' => 'in:Available,Rented'
        ]);

        $listing = Listing::create($request->all());
        return response()->json($listing, 201);
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);
        if (!$listing) return response()->json(['message' => 'Listing not found'], 404);

        $listing->update($request->only(['title', 'description', 'rent', 'contact_number', 'images', 'status']));
        return response()->json($listing, 200);
    }

    public function destroy($id)
    {
        $listing = Listing::find($id);
        if (!$listing) return response()->json(['message' => 'Listing not found'], 404);

        $listing->delete();
        return response()->json(['message' => 'Listing deleted'], 200);
    }
}

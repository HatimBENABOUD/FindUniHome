<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index($userId)
    {
        return response()->json(Favorite::where('user_id', $userId)->pluck('listing_id'), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'listing_id' => 'required|exists:listings,id'
        ]);

        $favorite = Favorite::firstOrCreate($request->all());
        return response()->json($favorite, 201);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'listing_id' => 'required|exists:listings,id'
        ]);

        $favorite = Favorite::where($request->only(['user_id', 'listing_id']))->first();
        if (!$favorite) return response()->json(['message' => 'Favorite not found'], 404);

        $favorite->delete();
        return response()->json(['message' => 'Listing unfavorited'], 200);
    }
}
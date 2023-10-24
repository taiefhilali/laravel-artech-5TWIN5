<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserFavoriteProductsController extends Controller
{
    public function index($userId)
    {
            $user = User::find($userId);
    
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
            $favoriteProducts = $user->favorites;
    
        return view('product.indexFav', ['favoriteProducts' => $favoriteProducts]);
    }
    
    public function add($productId)
    {
        // Use a fixed user ID for testing purposes
        $fixedUserId = 1; 
    
        $user = User::find($fixedUserId);
        $product = Product::find($productId);
    
        if (!$user || !$product) {
            return response()->json(['message' => 'User or product not found'], 404);
        }
    
        if (!$user->favorites()->where('product_id', $productId)->exists()) {
            $user->favorites()->attach($productId);
                return redirect()->route('product.indexFav', ['userId' => $fixedUserId]);
        } else {
            return redirect()->route('product.indexFav', ['userId' => $fixedUserId]);
        }
    }
    

    public function remove($productId)
{
    $fixedUserId = 1;

    $user = User::find($fixedUserId);
    $product = Product::find($productId);

    if (!$user || !$product) {
        return response()->json(['message' => 'User or product not found'], 404);
    }

    if ($user->favorites()->where('product_id', $productId)->exists()) {
        $user->favorites()->detach($productId);

        return redirect()->route('product.indexFav', ['userId' => $fixedUserId]);
    } else {
        return response()->json(['message' => 'Product is not in favorites']);
    }
}

    

}

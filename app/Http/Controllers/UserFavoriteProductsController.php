<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserFavoriteProductsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;
        $userr = User::find($userId);
    
        if (!$userr) {
            return response()->json(['message' => 'User not found'], 404);
        }
            $favoriteProducts = $userr->favorites;
    
        return view('product.indexFav', ['favoriteProducts' => $favoriteProducts]);
    }
    
    public function add($productId)
    {
        // Use a fixed user ID for testing purposes
        $user = Auth::user();
        $userId = $user->id;    
        $userr = User::find($userId);
        $product = Product::find($productId);
    
        if (!$userr || !$product) {
            return response()->json(['message' => 'User or product not found'], 404);
        }
    
        if (!$userr->favorites()->where('product_id', $productId)->exists()) {
            $userr->favorites()->attach($productId);
                return redirect()->route('product.indexFav', ['userId' => $userId]);
        } else {
            return redirect()->route('product.indexFav', ['userId' => $userId]);
        }
    }
    

    public function remove($productId)
{
    $user = Auth::user();
    $userId = $user->id;    
    $userr = User::find($userId);
    $product = Product::find($productId);

    if (!$userr || !$product) {
        return response()->json(['message' => 'User or product not found'], 404);
    }

    if ($userr->favorites()->where('product_id', $productId)->exists()) {
        $userr->favorites()->detach($productId);

        return redirect()->route('product.indexFav', ['userId' => $userId]);
    } else {
        return response()->json(['message' => 'Product is not in favorites']);
    }
}

    

}

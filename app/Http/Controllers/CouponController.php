<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;


class CouponController extends Controller
{
    public function create()
    {
        return view('coupons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:coupons,code',
            'discount' => 'required|numeric',
            'type' => 'required|in:fixed,percent',
            'expires_at' => 'nullable|date'
        ]);

        Coupon::create($request->all());

        return redirect()->route('coupons.create')->with('success', 'Coupon créé avec succès.');
    }

    public function apply(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return back()->withErrors('Coupon invalide.');
        }

        if ($coupon->expires_at && $coupon->expires_at->lt(now())) {
            return back()->withErrors('Le coupon a expiré.');
        }

        // À ce stade, vous devrez déduire le montant de la remise de la totalité de la commande
        // Ceci est une simplification et dépendra de la logique de votre application
        $discount = $coupon->type === 'fixed'
            ? $coupon->discount
            : ($totalAmount * ($coupon->discount / 100));

        $newTotal = $totalAmount - $discount;

        // Stockez le nouveau total et le coupon utilisé dans la session ou la base de données
        session(['discount' => $discount, 'newTotal' => $newTotal, 'coupon_id' => $coupon->id]);

        return back()->with('success', 'Coupon appliqué avec succès!');
    }
}

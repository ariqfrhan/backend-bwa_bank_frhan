<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    public function index() {
        $banks = PaymentMethod::where('status', 'active')
                    ->where('code', "!=", 'frhan')
                    ->get()
                    ->map(function($item){
                        $item->thumbnail = $item->thumbnail ? url($item->thumbnail) : "";
                        return $item;
                    });
        return response()->json($banks);
    }
}

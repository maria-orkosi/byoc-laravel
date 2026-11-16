<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MenuController
{
    public function index()
    {
        $currency = env('MENU_CURRENCY', 'EUR');
        return response()->json(['currency' => $currency, 'dishes' => DB::table('dishes')->orderBy('id')->get()]);
    }
}

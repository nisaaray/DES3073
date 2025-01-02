<?php
namespace App\Http\Controllers;

use App\Models\Burger;

class BurgerController extends Controller
{
    public function index()
    {
        $burgers = Burger::all();
        return view('burgers.index', compact('burgers'));
    }
}
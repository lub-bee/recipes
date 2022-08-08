<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Receipe;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view("dashboard")
            ->with("ingredients", Ingredient::all())
            ->with("last_ingredients", Ingredient::orderBy("id","desc")->take(10)->get())
            ->with("receipes", Receipe::all())
            ->with("last_receipes", Receipe::orderBy("id","desc")->take(10)->get())
            ->with("users", User::all())
            ->with("last_users", User::orderBy("id","desc")->take(10)->get());
    }

    public function cgu(){
        return view("page.cgu");
    }
}

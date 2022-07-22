<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Receipe;
use App\Models\Requirement;
use App\Models\Unite;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($receipe_id)
    // {
    //     return view("requirement.index")
    //         ->with("receipe", Receipe::findOrFail($receipe_id))
    //         ->with("unites", Unite::all());
    // }



    public function ingredients_store(Request $request, $receipe_id){
        // dd($request);
        $validated = $request->validate([
            'ingredient' => 'required|max:64',
            'unite_id' => 'required|numeric|exists:App\Models\Unite,id',
            'quantity' => 'required|numeric',
        ]);

        $ingredient = Ingredient::where(["name" => $validated["ingredient"]])->firstOrFail();

        Requirement::insert([
            "receipe_id" => $receipe_id,
            "ingredient_id" => $ingredient->id,
            "unite_id" => $validated["unite_id"],
            "quantity" => $validated["quantity"],
        ]);

        return redirect()->route("requirement",$receipe_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

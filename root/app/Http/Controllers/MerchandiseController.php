<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMerchandiseRequest;
use App\Http\Requests\UpdateMerchandiseRequest;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchandises = Merchandise::all();
        return view('/merchandise/merchandise', compact('merchandises'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/merchandise/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMerchandiseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMerchandiseRequest $request)
    {
        $validateData = $request -> validated();
        $merchandise =  Merchandise::create([
            'merchandise_number' => $validateData['merchandise_number'],
            'merchandise_name' => $validateData['merchandise_name'],
            'merchandise_classification' => $validateData['merchandise_classification'],
            'merchandise_price' => $validateData['merchandise_price'],
            'merchandise_plastic' => $validateData['merchandise_plastic'],
            'merchandise_plastic_notes' => $validateData['merchandise_plastic_notes'],
            'merchandise_paper' => $validateData['merchandise_paper'],
            'merchandise_paper_notes' => $validateData['merchandise_paper_notes'],
            'merchandise_color' => $validateData['merchandise_color'],
            'merchandise_size' => $validateData['merchandise_size'],
        ]);

        $merchandise -> save();
        return redirect('/merchandise/list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show(Merchandise $merchandise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchandise $merchandise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMerchandiseRequest  $request
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMerchandiseRequest $request, Merchandise $merchandise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchandise $merchandise)
    {
        //
    }
}

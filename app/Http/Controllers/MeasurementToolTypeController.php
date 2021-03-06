<?php

namespace App\Http\Controllers;

use App\Http\Resources\MeasurementToolTypeResource;
use App\Models\MeasurementToolType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class MeasurementToolTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        /*Measurement Tool Types List*/
        $types = MeasurementToolType::all();

        return Inertia::render('Modules/MeasurementTool/Type/Index', [
            'tableData' => MeasurementToolTypeResource::collection($types),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Modules/MeasurementTool/Type/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $attributes['creator_id'] = Auth::id();
        MeasurementToolType::create($attributes);

        Session::flash('toastr', ['type' => 'solid-green', 'position' => 'rb', 'content' => '<b>The measurement tool type has been successfully created.</b><br><b>Type: </b>' . $request['name']]);
        return redirect()->route('measurement-tool-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

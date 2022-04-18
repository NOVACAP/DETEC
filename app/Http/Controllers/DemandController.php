<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand;
use App\Models\Activity;
use App\Models\Interested;
use App\Models\ThematicArea;
use App\Models\TechniqueArea;
use App\Models\AdministrativeRegion;
use App\Models\Process;




class DemandController extends Controller
{
    /**verify if user logged in
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index ()
     {

     }

    public function demandsWithRelationships()
    {

        $demands = Demand::with(
            'activities' ,
            'techniqueAreas',
            'thematicArea',
            'administrativeRegion',
            'interested',
            'process',
            'demandsEmployer',
            )->get();

        return view('demands.index' , compact ('demands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::get();
        $administrativeRegions = AdministrativeRegion::get();
        $interesteds = Interested::get();
        $techniqueAreas = TechniqueArea::get();
        $thematicAreas = ThematicArea::get();
        $processes = Process::get();

        return view('demands/create' , [
            'activities' => $activities,
            'administrativeRegions' => $administrativeRegions,
            'interesteds' => $interesteds,
            'techniqueAreas' => $techniqueAreas,
            'thematicAreas' => $thematicAreas,
            'processes' => $processes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  Demand::create([
            'date_input_demand' => $request -> date_input_demand,
        ]); */

            $request->validate([
                'date_input_demand' => 'required',
                'date_distribution_demand' => 'required',
                'delivery_demand' => 'nullable',
                'address_demand' => 'required',
                'activity_id'  => 'required',
                'interested_id' => 'required',
                'technique_area_id' => 'required',
                'thematic_area_id' => 'required',
                'administrative_region_id' => 'required',
                //'demands_employer_id' => 'nullable',
                'process_id' => 'required',
            ]);

     Demand::create($request->all());
        //$demand -> save();
       return redirect()->route('demands.create');

            //$data = process
            //$id = this->create($data)->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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

<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreActivityRequest $request)
    {
        return view('newactivity', ['project_id'=> $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        //dd($request);
        $data = $request ->only(['title','description','priority','start_date','end_date','project_id']);
        $data['created_at'] = Carbon::now();

        Activity::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
         return view('activity_detail', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        //
    }
}

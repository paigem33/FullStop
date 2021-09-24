<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // get the date the user signed up, use that for starting month in the drop down 
        // build array of each month between today and the first month they signed up 
        // for each day, query for stats and if there is one, add it to the array with the correct color/icon
        // pass info to format month view function to output the selected/current months info 
        // in the view, the month dropdown should be populated with a loop, checking for the selected month
        // on the calender, the days should be clickable and open a sweet alert to add a new stat
        // stats should be clickable, and open a sweet alert to edit the stat or delete it 
        $month = (isset($request['month']) ? $request['month'] : null);
        $year = (isset($request['year']) ? $request['year'] : null);

        $dates = get_date_data($month, $year);
        $output = format_month_view($dates);
        return view('user.partials.calendar')->with(['dates' => $dates, 'output' => $output]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

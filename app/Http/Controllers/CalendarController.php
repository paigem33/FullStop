<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Stat;
use App\StatType;
use DateTime;
use DateInterval;
use DatePeriod;
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

        Log::error(Auth::user()->created_at);

        $start    = (new \DateTime(Auth::user()->created_at))->modify('first day of this month');
        $end      = (new \DateTime('NOW'))->modify('last day of this month');
        $day_interval = \DateInterval::createFromDateString('1 day');
        $day_period   = new \DatePeriod($start, $day_interval, $end);

        $month_interval = \DateInterval::createFromDateString('1 month');
        $month_period   = new \DatePeriod($start, $month_interval, $end);

        $days_with_stats = [];

        foreach ($day_period as $day) {
            echo $day->format("Y-m-d") . "<br>\n";
            $stats = Stat::select()->where('user_id', Auth::user()->id)->where('date', $day->format("Y-m-d"))->get();
            if(!empty($stats)){
                foreach($stats as $stat){
                    $stat_type = StatType::select()->where('user_id', Auth::user()->id)->where('id', $stat->stat_type)->first();
                    $days_with_stats[$day->format("d-m-y")][] = [
                        'duration' => $stat->duration,
                        'notes' => $stat->notes,
                        'severity' => $stat->severity,
                        'stat_type' => [
                            'icon' => $stat_type->icon,
                            'color' => $stat_type->color,
                            'name' => $stat_type->name
                        ]
                    ];
                }
            }
        }

        print("<pre>".print_r($days_with_stats,true)."</pre>");

        // get the date the user signed up, use that for starting month in the drop down 
        // build array of each month between today and the first month they signed up 
        // for each day, query for stats and if there is one, add it to the array with the correct color/icon

        // pass info to format month view function to output the selected/current months info 
        // in the view, the month dropdown should be populated with a loop, checking for the selected month
        // on the calender, the days should be clickable and open a sweet alert to add a new stat
        // stats should be clickable, and open a sweet alert to edit the stat or delete it 
        $month = (isset($request['month']) ? $request['month'] : null);
        $year = (isset($request['year']) ? $request['year'] : null);

        if(empty($month) || empty($year)){
            $date = new \DateTime('NOW');
            $month = $date->format('m');
            $year = $date->format('Y');
        }

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

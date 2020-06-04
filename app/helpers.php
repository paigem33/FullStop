<?php

function get_date_data($month = null, $year = null) {
    Log::error($year . 'first');
    if(!isset($year)){
        $year = date("Y");
    }
    if(!isset($month)){
        $month = date('m');
    }
    Log::error($month);
    

    $num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $days = array();

    for ($i = 1; $i <= $num; $i++) {
        $mktime = mktime(0, 0, 0, $month, $i, $year);
        $date = date("d", $mktime);
        $name = date("D", strtotime($year . '-' . $month . '-' . $i));
        $days[$i] = ['date' => $date, 'name' => $name];
    }

    $data = array();
    $data['days'] = $days;
    $month = ['number' => $month, 'name' => date('F', mktime(0, 0, 0, $month, 10))];
    $data['month'] = $month;
    $data['year'] = $year;

    return $data;
}

function get_calender_rows($amount){
    return str_repeat('<div class="cal-column"></div>', $amount);
}

function format_month_view($dates){

    $calendar = '<div>';
    $calendar .= '<div class="cal-row">';

    // change out for multi columns

    if ($dates['days'][1]['name'] === 'Sun'){
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if($dates['days'][1]['name'] === 'Mon'){
        $calendar .= get_calender_rows(1);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Tue'){
        $calendar .= get_calender_rows(2);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Wed'){
        $calendar .= get_calender_rows(3);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Thu'){
        $calendar .= get_calender_rows(4);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Fri'){
        $calendar .= get_calender_rows(5);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Sat'){
        $calendar .= get_calender_rows(6);
        $calendar .= '<div class="cal-column">' . $dates['days'][1]['date'] . '</div></div>'; // closes out first row
    } 

    $count = 0;
    foreach ($dates['days'] as $day){
        if($count == 0){
            $count++;
            continue;
        } 
        if ($day['name'] == 'Sat'){
            $calendar .= '<div class="cal-column">' . $day['date'] . '</div></div><div class="cal-row">'; // closes out row, starts next one
        } else {
            $calendar .= '<div class="cal-column">' . $day['date'] . '</div>';
        }
    }

    $calendar .= '</div></div>';

    return $calendar;

}

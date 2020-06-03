<?php

function dates_month($month = null, $year = null) {

    if(!isset($year)){
        $year = date("Y");
    }
    if(!isset($month)){
        $month = date('m');
    }

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

function format_month_view($dates){

    // Mon Tue Wed Thu Fri Sat Sun Mon Tue Wed Thu Fri Sat Sun Mon Tue Wed Thu Fri Sat Sun Mon Tue Wed Thu Fri Sat Sun Mon Tue

    // @foreach ($dates['days'] as $day)
    //     {{$day['name']}}
    // @endforeach

    $calendar = '<div>';
    $calendar .= '<div class="row">';

    // change out for multi columns

    if ($dates['days'][1]['name'] === 'Sun'){
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if($dates['days'][1]['name'] === 'Mon'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Tue'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Wed'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Thu'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Fri'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div>';
    } else if ($dates['days'][1]['name'] === 'Sat'){
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1"></div>';
        $calendar .= '<div class="col-1">' . $dates['days'][1]['date'] . '</div></div>'; // closes out first row
    } 

    $count = 0;
    foreach ($dates['days'] as $day){
        if($count == 0){
            $count++;
            continue;
        } 
        if ($day['name'] == 'Sat'){
            $calendar .= '<div class="col-1">' . $day['date'] . '</div></div><div class="row">'; // closes out row, starts next one
        } else {
            $calendar .= '<div class="col-1">' . $day['date'] . '</div>';
        }
    }

    $calendar .= '</div></div>';

    return $calendar;

}

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
        $days[$i] = $date;
    }

    $data = array();
    $data['days'] = $days;
    $month = ['number' => $month, 'name' => date('F', mktime(0, 0, 0, $month, 10))];
    $data['month'] = $month;
    $data['year'] = $year;

    return $data;
}

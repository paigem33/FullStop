@extends('user.layouts.app')

@section('title', 'Calendar - FullStop.')

@section('content')

<div id="calendar" class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header ">
                    <select name="date" id="date"">
                        <option value="{{$dates['month_year']}}">{{date('m-Y', strtotime($dates['month_year']))}}</option>
                        <option {{ ($dates['month_year'] == "08, 2019" ? 'selected' : '') }} value="08, 2019">August 2019</option>
                        <option {{ ($dates['month_year'] == "09, 2019" ? 'selected' : '') }} value="09, 2019">September 2019</option>
                        <option {{ ($dates['month_year'] == "10, 2019" ? 'selected' : '') }} value="10, 2019">October 2019</option>
                        <option {{ ($dates['month_year'] == "11, 2019" ? 'selected' : '') }} value="11, 2019">November 2019</option>
                        <option {{ ($dates['month_year'] == "12, 2019" ? 'selected' : '') }} value="12, 2019">December 2019</option>
                        <option {{ ($dates['month_year'] == "01, 2020" ? 'selected' : '') }} value="01, 2020">January 2020</option>
                        <option {{ ($dates['month_year'] == "02, 2020" ? 'selected' : '') }} value="02, 2020">February 2020</option>
                        <option {{ ($dates['month_year'] == "03, 2020" ? 'selected' : '') }} value="03, 2020">March 2020</option>
                        <option {{ ($dates['month_year'] == "04, 2020" ? 'selected' : '') }} value="04, 2020">April 2020</option>
                        <option {{ ($dates['month_year'] == "05, 2020" ? 'selected' : '') }} value="05, 2020">May 2020</option>
                        <option {{ ($dates['month_year'] == "06, 2020" ? 'selected' : '') }} value="06, 2020">June 2020</option>
                    </select>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-8">
                    <div class="cal-row">
                        <div class="cal-column header">Sun</div>
                        <div class="cal-column header">Mon</div>
                        <div class="cal-column header">Tue</div>
                        <div class="cal-column header">Wed</div>
                        <div class="cal-column header">Thu</div>
                        <div class="cal-column header">Fri</div>
                        <div class="cal-column header">Sat</div>
                    </div>
                    {!!$output!!}
                    </div>
                    <div class="col-md-4">Stats</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
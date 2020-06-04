@extends('user.layouts.app')

@section('title', 'Calendar - FullStop.')

@section('content')

<div id="calendar" class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header ">
                <!-- TODO this will be a cool drop down with all the months, years that will set the request with those dates, might need to be wrapped in a form some day? -->
                <form action="#" id="date-form">
                    <select name="date" id="date"">
                        <option value="01, 2020">July 2019</option>
                        <option value="02, 2020">August 2019</option>
                        <option value="03, 2020">September 2019</option>
                        <option value="04, 2020">October 2019</option>
                        <option value="05, 2020">November 2019</option>
                        <option value="06, 2020">December 2019</option>
                        <option value="01, 2020">January 2020</option>
                        <option value="02, 2020">February 2020</option>
                        <option value="03, 2020">March 2020</option>
                        <option value="04, 2020">April 2020</option>
                        <option value="05, 2020">May 2020</option>
                        <option value="06, 2020">June 2020</option>
                    </select>
                </form>
                <h4 class="card-title">{{$dates['month']['name']}} {{$dates['year']}}</h4>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-8">
                    <div class="cal-row">
                        <div class="cal-column">Sun</div>
                        <div class="cal-column">Mon</div>
                        <div class="cal-column">Tue</div>
                        <div class="cal-column">Wed</div>
                        <div class="cal-column">Thu</div>
                        <div class="cal-column">Fri</div>
                        <div class="cal-column">Sat</div>
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
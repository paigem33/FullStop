@extends('user.layouts.app')

@section('title', 'Calendar - FullStop.')

@section('content')

<div id="new-reminder" class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header ">
                <!-- TODO this will be a cool drop down with all the months, years that will set the request with those dates, might need to be wrapped in a form some day? -->
                <h4 class="card-title">{{$dates['month']['name']}} {{$dates['year']}}</h4>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-8">
                    <div class="row">
                        <div class="col-1">Sun</div>
                        <div class="col-1">Mon</div>
                        <div class="col-1">Tue</div>
                        <div class="col-1">Wed</div>
                        <div class="col-1">Thu</div>
                        <div class="col-1">Fri</div>
                        <div class="col-1">Sat</div>
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
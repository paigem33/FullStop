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
                    @foreach ($dates['days'] as $day)
                        {{$day}}
                    @endforeach
                    </div>
                    <div class="col-md-4">yo</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
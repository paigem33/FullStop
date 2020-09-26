@extends('user.layouts.app')

@section('title', 'Home - FullStop.')

@section('content')

    <div id="home" class="content">
        <h1 class="m-0">Welcome back, {{ Auth::user()->name }}</h1>
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-body quote">
                            <blockquote>
                                <q>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</q>
                                <cite>Dieter Rams</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Reminders</h4>
                        </div>
                        <div class="card-body ">
                            @if(!empty($reminder_errors))
                                <p>{{$reminder_errors}}</p>
                            @endif
                            @if(!empty($reminders))
                                <ul>
                                    @foreach($reminders as $reminder)
                                        <li>{{$reminder->title}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="d-flex justify-content-start mb-2">
                                <a href="{{route('reminder.index')}}"><button class="btn shadow border-0 py-2 text-uppercase mr-2" style="width: 150px;">View all</button></a>
                                <a href="{{route('reminder.create')}}"><button class="btn shadow border-0 py-2 text-uppercase" style="width: 150px;">Add New</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

@endsection
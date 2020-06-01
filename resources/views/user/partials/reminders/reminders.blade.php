@extends('user.layouts.app')

@section('title', 'Reminders - FullStop.')

@section('content')

    <div id="reminders" class="content">
        <div class="headline-container">
            <h1 class="m-0">Reminders</h1>
            <a class="btn shadow border-0 py-2" href="{{route('reminder.create')}}"><span class="mdi mdi-plus"></span>Add New</a>
        </div>
        <div class="container-fluid mt-4">
            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">Reminder 1</h4>
                </div>
                <div class="card-body ">
                    Design is all about fucking relationships—the relationship of form and content, the relationship of elements, the relationship of designer and user. Creativity is a fucking work-ethic. Creativity is a fucking work-ethic. What’s important is the fucking drive to see a project through no matter what.
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <a href="{{route('reminder.index')}}"><button class="btn shadow border-0 py-2 text-uppercase mr-2 ml-3" style="width: 150px;">Edit</button></a>
                    <a href="{{route('reminder.create')}}"><button class="btn shadow border-0 py-2 text-uppercase" style="width: 150px;">Remove</button></a>
                </div>
            </div>

            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">Reminder 2</h4>
                </div>
                <div class="card-body ">
                    Design is all about fucking relationships—the relationship of form and content, the relationship of elements, the relationship of designer and user. Creativity is a fucking work-ethic. Creativity is a fucking work-ethic. What’s important is the fucking drive to see a project through no matter what.
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <a href="{{route('reminder.index')}}"><button class="btn shadow border-0 py-2 text-uppercase mr-2 ml-3" style="width: 150px;">Edit</button></a>
                    <a href="{{route('reminder.create')}}"><button class="btn shadow border-0 py-2 text-uppercase" style="width: 150px;">Remove</button></a>
                </div>
            </div>

            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">Reminder 3</h4>
                </div>
                <div class="card-body ">
                    Design is all about fucking relationships—the relationship of form and content, the relationship of elements, the relationship of designer and user. Creativity is a fucking work-ethic. Creativity is a fucking work-ethic. What’s important is the fucking drive to see a project through no matter what.
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <a href="{{route('reminder.index')}}"><button class="btn shadow border-0 py-2 text-uppercase mr-2 ml-3" style="width: 150px;">Edit</button></a>
                    <a href="{{route('reminder.create')}}"><button class="btn shadow border-0 py-2 text-uppercase" style="width: 150px;">Remove</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
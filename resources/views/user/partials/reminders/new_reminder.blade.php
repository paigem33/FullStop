@extends('user.layouts.app')

@section('title', 'New Reminder - FullStop.')

@section('content')

    <div id="new-reminder" class="content">
        <div class="container-fluid">
            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">New Reminder</h4>
                    @if(count($errors) > 0 )
                        <div style="margin-top: 10px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="color:black;">&times;</span>
                            </button>
                            <ul class="p-0 mb-0" style="list-style: none; font-size: 16px;">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-body ">
                    <form action="{{ route('reminder.store')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="start_date">Start Date</label>
                                <input type="text" class="form-control datepicker" name="start_date" id="start_date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="start_date">End Date</label>
                                <input type="text" class="form-control datepicker" name="end_date" id="start_date">
                            </div>
                        </div>
                        <!-- <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons" style="width:100%;"> -->
                            <!-- <label class="btn option-toggle active" style="width:50%; padding:10px; border-radius: 30px 0 0 30px;"> -->
                                <input type="radio" name="daily"> Daily
                            <!-- </label>
                            <label class="btn option-toggle" style="width:50%; padding:10px; border-radius: 0 30px 30px 0;"> -->
                                <input type="radio" name="monthly"> Monthly
                            <!-- </label> -->
                        <!-- </div> -->
                        <div class="form-group">
                            <input type="submit" class="form-control btn text-uppercase">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
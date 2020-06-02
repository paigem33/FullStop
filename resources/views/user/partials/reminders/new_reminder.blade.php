@extends('user.layouts.app')

@section('title', 'New Reminder - FullStop.')

@section('content')

    <div id="new-reminder" class="content">
        <div class="container-fluid">
            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">New Reminder</h4>
                </div>
                <div class="card-body ">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="email" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="start_date">Start Date</label>
                                <input type="text" class="form-control datepicker" id="start_date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="start_date">End Date</label>
                                <input type="text" class="form-control datepicker" id="start_date">
                            </div>
                        </div>
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons" style="width:100%;">
                            <label class="btn option-toggle active" style="width:50%; padding:10px; border-radius: 30px 0 0 30px;">
                                <input type="radio" name="options" autocomplete="off"> One Time
                            </label>
                            <label class="btn option-toggle" style="width:50%; padding:10px; border-radius: 0 30px 30px 0;">
                                <input type="radio" name="options" autocomplete="off"> Monthly
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn text-uppercase">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
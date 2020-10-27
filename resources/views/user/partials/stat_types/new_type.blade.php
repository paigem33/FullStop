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
                    <form action="{{ route('reminder.store')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="title" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
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
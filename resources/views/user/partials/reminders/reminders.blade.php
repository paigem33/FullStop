@extends('user.layouts.app')

@section('title', 'Reminders - FullStop.')

@section('content')

    <div id="reminders" class="content">
        <div class="headline-container">
            <h1 class="m-0">Reminders</h1>
            <a class="btn shadow border-0 py-2" href="{{route('reminder.create')}}"><span class="mdi mdi-plus"></span>Add New</a>
        </div>

        @if(!empty($success))
            <div style="margin-top: 10px; background-color: #ededed; max-width: 700px; color:black; margin-left:15px; position: relative;" class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="color:black;">&times;</span>
                </button>
                <p>{{$success}}</p>
            </div>
        @endif


        @isset($reminders)
            @foreach($reminders as $reminder)
                <div class="container-fluid mt-4">
                    <div class="card " style="max-width:700px;">
                        <div class="card-header ">
                            <h4 class="card-title">{{$reminder->title}}</h4>
                        </div>
                        <div class="card-body ">
                            {{$reminder->content}}
                        </div>
                        <div class="d-flex justify-content-start mb-3 mt-2">
                            <a href="{{route('reminder.index')}}"><button class="btn shadow border-0 py-2 text-uppercase mr-2 ml-3" style="width: 150px;">Edit</button></a>
                            <form method="POST" action="{{route('reminder.destroy', $reminder->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn shadow border-0 py-2 text-uppercase" style="width: 150px;">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset

        @if(count($errors) > 0 )
            @foreach($errors as $error)
                <p class="pt-3">{{$error}}</p>
            @endforeach
        @endif
        
    </div>

@endsection


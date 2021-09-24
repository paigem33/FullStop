@extends('user.layouts.app')

@section('title', 'Reminders - FullStop.')

@section('content')

    <div id="stats" class="content">
        <div class="headline-container">
            <h1 class="m-0">Stats</h1>
			<a class="btn shadow border-0 py-2" href="{{route('stats.create')}}"><span class="mdi mdi-plus"></span>Add New Stat</a>
			<a href="{{route('stat-type.create')}}" class="new-type"><button class="btn shadow border-0 py-2 text-uppercase mr-2 ml-3"><span class="mdi mdi-plus">Create New Category</button></a>
		</div>
		
		<div class="container-fluid mt-4">
			<div class="card " style="max-width:700px;">
				<div class="card-header ">
					<h4 class="card-title">stat one</h4>
				</div>
				<div class="card-body ">
					information
				</div>
			</div>
			<div class="card " style="max-width:700px;">
				<div class="card-header ">
					<h4 class="card-title">stat two</h4>
				</div>
				<div class="card-body ">
					information
				</div>
			</div>
		</div>
        
    </div>

@endsection


@extends('user.layouts.app')

@section('title', 'New Stat Type - FullStop.')

@section('content')

    <div id="new-stat-type" class="content">
        <div class="container-fluid">
            <div class="card " style="max-width:700px;">
                <div class="card-header ">
                    <h4 class="card-title">New Category</h4>
                    
                </div>
                <div class="card-body ">
                    <form action="{{ route('stat-type.store')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group new-stat-icon">
                            <label for="icon">Icon</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon1" value="mdi-water">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon2" value="mdi-head-alert">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon3" value="mdi-current-ac">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon4" value="mdi-heart">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon5" value="mdi-pill">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon6" value="mdi-ice-cream">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon7" value="mdi-dumbbell">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="icon" id="icon8" value="mdi-seat-individual-suite">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group new-stat-color">
                            <label for="color">Color</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color1" value="#FF5733">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color2" value="#FFFF33">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color3" value="#FF9033">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color4" value="#65B22B">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color5" value="#3BD0C9">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color6" value="#4669DF">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color7" value="#9C46DF">
                                    </div>
                                    <div class="col-sm">
                                        <input class="form-check-input" type="radio" name="color" id="color8" value="#DF46DD">
                                    </div>
                                </div>
                            </div>
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
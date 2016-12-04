@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <br><br><br>

                <div class="card">

                    <div class="card-height-indicator"></div>

                    <div class="card-content">

                        <div class="card-body">
                            <h1>People's Information</h1>
                            <br>
                            <br>
                            <h3>Name:</h3><h6>{{$people->name}}</h6>
                            <h3>Email:</h3><h6>{{$people->email}}</h6>
                            <h3>Mobile:</h3><h6>{{$people->phone}}</h6>
                        </div>

                        <footer class="card-footer">

                        </footer>

                    </div>

                </div>













            </div>

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{url('/people')}}">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>
        {{ csrf_field() }}

    <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name</label>
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="People Name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Number</label>
            <div class="col-md-4">
                <input id="textinput" name="phone" type="text" placeholder="People Number" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Email</label>
            <div class="col-md-4">
                <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Gender</label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input type="radio" name="gender" id="radios-0" value="1" checked="checked">
                    Male
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="gender" id="radios-1" value="2">
                    Female
                </label>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
            </div>
        </div>

    </fieldset>
</form>
@endsection
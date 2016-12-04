@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">



                <form class="form-horizontal" method="post" action="{{url('/people/'.$people->id)}}">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>People</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Peple Name</label>
                            <div class="col-md-4">
                                <input id="nameinput" name="name" type="text" value="{{$people->name}}" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">People Email</label>
                            <div class="col-md-4">
                                <input id="emailinput" name="email" type="text" value="{{$people->email}}" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mobile">People Mobile</label>
                            <div class="col-md-4">
                                <input id="mobile" name="mobile" type="text" value="{{$people->phone}}" class="form-control input-md">
                            </div>
                        </div>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>

        </div>
    </div>
@endsection

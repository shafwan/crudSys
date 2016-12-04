@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <p></p>
            <h1>Bootstrap Table Panel with Pagination</h1>



            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Panel Heading</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="{{url('/people/create')}}">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                                <th class="hidden-xs">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Send Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($peoples)>0)
                                @foreach($peoples as $people)
                                    <tr>
                                        <td align="center">
                                            <a href="{{url('/people/'.$people->id.'/edit')}}"
                                               class="btn btn-default"><em
                                                        class="fa fa-pencil"></em></a>
                                            <form action="{{ url('people/'.$people->id) }}" method="POST"
                                                  style="margin: 0; padding: 0; width: auto; height: auto">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="delete-task-{{ $people->id }}"
                                                        class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="hidden-xs">{{$people->id}}</td>
                                        <td><a href="{{url('/people/'.$people->id)}}">{{$people->name}}</a></td>
                                        <td>{{$people->email}}</td>
                                        <td>{{$people->phone}}</td>
                                        <td>
                                            <form action="{{ url('people/send') }}" method="POST"
                                                  style="margin: 0; padding: 0; width: auto; height: auto">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="emailaddress" value="{{$people->email}}">
                                                <input type="hidden" name="peopleid" value="{{$people->id}}">
                                                <button type="submit" id="send"
                                                        class="btn btn-danger">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-xs-4">Page  {{$peoples->currentPage()}} of {{$peoples->lastPage() }}
                            </div>
                            <div class="col col-xs-8">
                                <ul class="pagination hidden-xs pull-right">
                                    {{ $peoples->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

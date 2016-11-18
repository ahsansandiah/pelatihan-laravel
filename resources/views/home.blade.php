@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @if(Auth::user()->admin)
                      <strong>You as admin :)</strong>
                    @else:
                      <strong>You not admin :p</strong>
                    @endif

                    <p>
                      <a href="{{ url('admin-page') }}">To Admin Page</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
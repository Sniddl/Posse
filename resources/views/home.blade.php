@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

          <div class="card" id="dashboard">
            <div class="card-header">Dashboard</div>
            <div class="card-block">
                <div class="card-text">
                    You are logged in as {{Auth::user()->name}}!
                </div>
            </div>
          </div>



        </div>

    </div>
</div>
@endsection

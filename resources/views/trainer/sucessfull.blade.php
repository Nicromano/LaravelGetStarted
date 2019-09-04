@extends('layout/index')

 @section('title', 'Congratulations')
 @section('content')

<div class="row">
    <div class="col-md-5 m-auto">
        <div class="card m-5 shadow">
            <div class="text-center card-header">
                <h3>Congratulations</h3>
            </div>
            <div class="card-body text-center">
                <h5>The trainer has been created successfull</h5>
                <a href="/trainers/create" class="btn btn-primary btn-block">Create new trainer</a>
            </div>

        </div>
    </div>
</div>
     
 @endsection
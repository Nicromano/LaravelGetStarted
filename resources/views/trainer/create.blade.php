
@extends('layout/index')

 @section('title', 'Trainer create')
 @section('content')
    <div class="row">
        <div class="col-md-5 m-auto">
            <form action="/trainers" class="form-group"   method="POST">
                @csrf
                <div class="card m-5 shadow">
                    <div class="card-header">
                        <h3>Create trainer</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Username: </label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="btn btn-primary btn-block ">Send</button>
                    </div>
                </div>
            </form>
        </div> 
    </div> 
 

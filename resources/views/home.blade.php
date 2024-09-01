@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body" id="app">
                    <chatapp :user="{{ auth()->user() }}"></chatapp>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

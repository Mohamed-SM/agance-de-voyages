@extends('layouts.app')

@section('style')
    <style>
        table {
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid black;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">La list des utilisateurs</div>
                <div class="panel-body">
                    <p>Name : {{ $user->name }}</p>
                    <p>Email : {{ $user->email }}</p>
                    <p>Id :  {{ $user->id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

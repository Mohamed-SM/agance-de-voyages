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
                    <table>
                        <thead>
                            <tr>
                                <th>USER Name</th>
                                <th>email</th>
                                <th>lien</th>    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->email }} </td>
                                <td><a href="/users/{{ $user->id }} ">voir</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

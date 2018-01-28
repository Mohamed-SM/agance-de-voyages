@extends('layouts.admindashboard')

@section('dashbord-content')
<div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
          <div class="tg-box tg-profile">
            <div class="tg-heading">
              <h3>les Permessions</h3>
              <a class="tg-btnedit" href="{{ route('permissions.create') }}">Ajouté Permession</a>
            </div>
            <div class="tg-dashboardcontent">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td> 
                                <td>
                                <a href="{{ URL::to('admin/permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left">Edit</a>
            
                                {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
            
                                </td>
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

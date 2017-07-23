@extends('templates.admin')

@section('stylesheets')
@stop

@section('scripts')

@stop

@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th class="text-right">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
            <tr>
                <td>{{ $row->first_name }}</td>
                <td>{{ $row->last_name }}</td>
                <td>{{ $row->email }}</td>
                <td class="text-right">
                    <button class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
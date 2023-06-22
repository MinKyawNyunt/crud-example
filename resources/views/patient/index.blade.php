
@extends('master')
 
@section('title', 'Patient List')
 
@section('body')
    <div class="text-right m-1">
        <a href="{{ route('patient.create') }}" class="btn btn-primary">Add Patient</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Register Date</th>
            <th scope="col">Diagnosis</th>
            <th scope="col">Remark</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($patients as $key => $patient)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->register_date}}</td>
                    <td>{{$patient->diagnosis}}</td>
                    <td>{{$patient->remark}}</td>
                    <td>
                        <a href="{{ route('patient.edit', ['patient' => $patient->id]) }}" class="btn btn-warning">Edit</a>
                        <form  class="d-inline" action="{{ route('patient.destroy', ['patient' => $patient->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop



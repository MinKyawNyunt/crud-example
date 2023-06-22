@extends('master')
 
@section('title', 'Add Patient')
 
@section('body')
    <form action="{{ route('patient.update', ['patient' => $patient->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Patient Name</label>
            <input name="name" value="{{$patient->name}}" type="text" class="form-control" id="name" placeholder="Enter patient name">
        </div>
        <div class="form-group">
            <label for="registerDate">Register Date</label>
            <input value="{{$patient->register_date}}" name="register_date" type="date" class="form-control" id="registerDate">
        </div>
        <div class="form-group">
            <label for="diagnosisList">Diagnosis List</label>
            <select name="diagnosis" class="form-control" id="diagnosisList">
                <option value="">Select diagnosis</option>
                <option value="Diagnosis 1" {{ $patient->diagnosis === 'Diagnosis 1' ? 'selected' : '' }}>Diagnosis 1</option>
                <option value="Diagnosis 2" {{ $patient->diagnosis === 'Diagnosis 2' ? 'selected' : '' }}>Diagnosis 2</option>
                <option value="Diagnosis 3" {{ $patient->diagnosis === 'Diagnosis 3' ? 'selected' : '' }}>Diagnosis 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="followUpRemark">Follow Up &amp; Remark</label>
            <textarea  name="remark" class="form-control" id="followUpRemark" rows="3">{{$patient->remark}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop



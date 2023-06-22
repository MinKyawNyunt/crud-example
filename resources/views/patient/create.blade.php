
@extends('master')
 
@section('title', 'Add Patient')
 
@section('body')
    <form action="{{ route('patient.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Patient Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter patient name">
        </div>
        <div class="form-group">
            <label for="registerDate">Register Date</label>
            <input name="register_date" type="date" class="form-control" id="registerDate">
        </div>
        <div class="form-group">
            <label for="diagnosisList">Diagnosis List</label>
            <select name="diagnosis" class="form-control" id="diagnosisList">
                <option value="">Select diagnosis</option>
                <option value="Diagnosis 1">Diagnosis 1</option>
                <option value="Diagnosis 2">Diagnosis 2</option>
                <option value="Diagnosis 3">Diagnosis 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="followUpRemark">Follow Up &amp; Remark</label>
            <textarea name="remark" class="form-control" id="followUpRemark" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop



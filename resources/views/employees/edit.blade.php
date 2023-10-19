@extends('layouts.template')
   
@section('body')
    <h1 class="mb-0">Edit Company</h1>
    <hr />
    <form action="{{ route('employees.update', $employees->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $employees->first_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $employees->last_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company</label>
                <input type="text" name="company" class="form-control" placeholder="Company" value="{{ $employees->company }}" >
            </div>
            <div class="col mb-3">
              <label class="form-label">Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $employees->email }}" >
          </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $employees->phone }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
        
    </form>
@endsection
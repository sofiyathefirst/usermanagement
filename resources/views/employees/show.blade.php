@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Employee Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Name:</strong>
                @extends('layouts.template')
                @section('body')
                    <h1 class="mb-0">Detail Employee</h1>
                    <hr />
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $employees->first_name }}" readonly>
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $employees->last_name }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Company</label>
                            <input type="text" name="company" class="form-control" placeholder="Company" value="{{ $employees->company }}" readonly>
                        </div>
                        <div class="col mb-3">
                          <label class="form-label">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $employees->email }}" readonly>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $employees->phone }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Created At</label>
                            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $employees->created_at }}" readonly>
                        </div>
                        <div class="col mb-3">
                            <label class="form-label">Updated At</label>
                            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $employees->updated_at }}" readonly>
                        </div>
                    </div>
                @endsection
                            {{ $employees->employees_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $employees->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Logo</strong>
                {{ $employees->logo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <strong>Website</strong>
                    {{ $employees->websites }}
                </div>
            </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
@endsection
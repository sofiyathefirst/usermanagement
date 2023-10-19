@extends('layouts.template')
@section('body')
    <h1 class="mb-0">Detail Company</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" name="companies_name" class="form-control" placeholder="Name" value="{{ $companies->companies_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $companies->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Logo</label>
            <input type="text" name="logo" class="form-control" placeholder="Logo" value="{{ $companies->logo }}" readonly>
        </div>
        <div class="col mb-3">
          <label class="form-label">Website</label>
          <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $companies->websites }}" readonly>
      </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $companies->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $companies->updated_at }}" readonly>
        </div>
    </div>
@endsection

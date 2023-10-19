@extends('layouts.template')
   
@section('body')
    <h1 class="mb-0">Edit Company</h1>
    <hr />
    <form action="{{ route('companies.update', $companies->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company Name</label>
                <input type="text" name="companies_name" class="form-control" placeholder="Company Name" value="{{ $companies->companies_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $companies->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Logo</label>
                <input type="text" name="logo" class="form-control" placeholder="Logo" value="{{ $companies->logo }}" >
            </div>
            <div class="col mb-3">
              <label class="form-label">Website</label>
              <input type="text" name="websites" class="form-control" placeholder="Website" value="{{ $companies->websites }}" >
          </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
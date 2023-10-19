@extends('layouts.template')
@section('body')
    <h1 class="mb-0">Add Company</h1>
    <hr />
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="companies_name" class="form-control" placeholder="Company Name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="logo" class="form-control" placeholder="Logo">
            </div>
            <div class="col">
              <input type="text" name="websites" class="form-control" placeholder="Websites">
          </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
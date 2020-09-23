@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 offset-md-3  mt-5">
    <div class="card ">
        <div class="card-header bg-primary text-white company-title">Companies</div>
        <div class="card-body ">
            
            <ul class="list-group">
                @foreach($companies as $company)
            <li class="list-group-item list-group-item-action" href="#list-item-1"><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
                @endforeach
            </ul>
            
        </div>
    </div>
</div>
@endsection

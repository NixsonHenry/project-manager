@extends('layouts.app')

@section('content')
    
<div class="col-lg-9 col-md-9 col-sm-9 pull-left">
    <div class="jumbotron">
        <h1 class="display-4">{{ $company->name }}</h1>
        <p>{{ $company->description }}</p>
      <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
    </div>

    <div class="row" style="background: white; margin: 10px">
    @foreach($company->projects as $project)
      <div class="col-lg-4 col-md-4 col-sm-4">
        <h2>{{ $project->name }}</h2>
        <p>{{ $project->description}}</p>
        <p><a class="btn btn-primary" href="/pojects/{{ $project->id }}" role="button">View Project</a></p>
      </div>
@endforeach
    </div>
</div>

<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
   <!-- <div class="sidebar-module sidebar-module-inset">
      <h4>About</h4>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>-->
    <div class="sidebar-module">
      <h4>Actions</h4>
      <ol class="list-unstyled">
      <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
        <li><a href="/companies/{{ $company->id }}">Delete</a></li>
        <li><a href="#">Add new member</a></li>
      </ol>
    </div>
    
    <!-- <div class="sidebar-module">
      <h4>Members</h4>
      <ol class="list-unstyled">
        <li><a href="#">February 2014</a></li>
      </ol>
    </div>--> 
</div>
@endsection

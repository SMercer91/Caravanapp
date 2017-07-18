
@extends('main')

@section('content')
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Stock</h1>
            </div>
        </div>

        <!-- /.row -->
        
        <div class="container">
            <div class="row">
                <div id="filter-panel" class="collapse filter-panel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-inline" role="form" action="/search" method="POST">
                              {{ csrf_field() }}  
  <div class="form-group">
    <label for="searchterm" class="col-sm-2 control-label">Model</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="searchterm" name="searchterm">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Search</button>
    </div>
  </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel" style="margin-bottom: 2% ">
                    <span class="glyphicon glyphicon-cog"></span> Advanced Search
                </button>
            </div>
        </div>
        <!-- Service Panels -->
        
        <div class="row">
        @foreach ($caravan as $car) 
             <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <a href="/caravans/{{ $car->id }}">
                                <img class="img-responsive img-hover" src="{{ asset($car->images[0]->path) }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">   
                            <h4>
                                <a href="/caravans/{{ $car->id }}">
                                    {{ $car->model }}
                                    
                                </a>
                            </h4>
                            <p>
                              </p>
                            <h2> £{{ $car->price }} </h2>
                            <a href="/caravans/{{ $car->id }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

@endsection
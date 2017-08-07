@extends('main')

@section('content')

    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $caravan->model }}</h1>
            </div>
        </div>

        <!-- Service Panels -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-responsive img-hover" src="{{ asset($caravan->images[0]->path) }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                                <h3>Images</h3>
                            <div class="row">      
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[1]->path) }}"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[2]->path) }}"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[3]->path) }}"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[4]->path) }}"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[5]->path) }}"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="{{ asset($caravan->images[6]->path) }}"></a></div>
                            </div>
                        </div>
                        <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
            
                                    <div class="modal-body">
                                
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">   
                                
                                <p>Year: {{ $caravan->year }}</p>

                                <p>Size: {{ $caravan->size }}</p>

                                <p>Bedrooms: {{ $caravan->bedrooms }}</p>

                                <p>Extras: {{ $caravan->extras }}</p>

                                <p>Description: {{ $caravan->description }}</p>
                                <h2>£{{ $caravan->price }}</h2>
                                <p> If you require more details about this caravan please call on: <strong>01430 448245</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
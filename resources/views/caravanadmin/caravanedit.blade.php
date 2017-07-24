@extends('main')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Caravan <a href="{{route('caravan.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="{{ route('caravan.update', ['id' => $id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="YearOfCaravan">Year</label>
                                <input type="text" class="form-control" name="year" placeholder="Enter The Year of The Caravan">
                            </div>

                            <div class="form-group">
                              <label for="ModelOfCaravan">Model</label>
                              <input type="text" class="form-control" name="Model" placeholder="Enter The Model of The Caravan">
                            </div>
                              
                            <div class="form-group">
                              <label for="SizeOfCaravan">Size</label>
                              <input type="text" class="form-control" name="size" placeholder="Enter The Size of The Caravan">
                            </div>

                            <div class="form-group">
                              <label for="BedroomsOfCaravan">Bedrooms</label>
                              <input type="text" class="form-control" name="bedrooms" placeholder="Enter The Number of Bedrooms">
                            </div>
                              
                            <div class="form-group">
                              <label for="PriceOfCaravan">Price</label>
                              <input type="text" class="form-control" name="price" placeholder="Enter The Price of The Caravan">
                            </div>

                            <div class="form-group">
                                <label for="ExtrasOfCaravan">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Enter The Extras of The Caravan">
                            </div>
                            

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Save Caravan Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
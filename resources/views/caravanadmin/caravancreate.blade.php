@extends('main')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Insert Caravan <a href="{{route('caravan.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                        <form action="/insert" method="post" enctype="multipart/form-data">
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

                            <div class="form-check">
                                <label for="Extras">Extras</label><br>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" name="centralheating">
                                    Central Heating
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" name="doubleglazing">
                                    Double Glazing
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="ExtrasOfCaravan">Description</label>
                                <textarea class="form-control" input type="text"  name="description" placeholder="Enter The Extras of The Caravan"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Multiple Picture Upload</label>
                                <input type="file" class="form-control-file" name="caravanPhotos[]" aria-describedby="fileHelp" multiple>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                                <input type="text" class="form-control" name="year" placeholder="Enter The Year of The Caravan" required>
                            </div>

                            <div class="form-group">
                              <label for="ModelOfCaravan">Model</label>
                              <input type="text" class="form-control" name="Model" placeholder="Enter The Model of The Caravan" required>
                            </div>
                              
                            <div class="form-group">
                              <label for="SizeOfCaravan">Size</label>
                              <input type="text" class="form-control" name="size" placeholder="Enter The Size of The Caravan" required>
                            </div>

                            <div class="form-group">
                              <label for="BedroomsOfCaravan">Bedrooms</label>
                              <input type="text" class="form-control" name="bedrooms" placeholder="Enter The Number of Bedrooms" required>
                            </div>
                              
                            <div class="form-group">
                              <label for="PriceOfCaravan">Price</label>
                              <input type="text" class="form-control" name="price" placeholder="Enter The Price of The Caravan" required>
                            </div>

                            <label for="Extras">Extras</label>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="centralheating">
                                                Central Heating
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="doubleglazing">
                                                Double Glazing
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="ensuite">
                                                Ensuite
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="washer">
                                                Washer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="dishwasher">
                                                Dishwasher
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="bath">
                                                Bath
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="intergrated_fridge_freezer">
                                                Intergrated Fridge Freezer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="walk_in_wardrobe">
                                                Walk in Wardrobe
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="separate_toilet">
                                                Separate Toilet
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="freestanding_furniture">
                                                Freestanding Furniture
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <row>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" name="ptr">
                                                Pitch Tiled Roof
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <div class="form-group">
                                <label for="ExtrasOfCaravan">Description</label>
                                <textarea class="form-control" input type="text"  name="description" placeholder="Enter The Extras of The Caravan" required></textarea>
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
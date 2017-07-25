@extends('main')

@section('content')

<h1 class="page-header">Insert New Caravans</h1>

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

	<div class="form-group">
	  <label for="ExtrasOfCaravan">Extras</label>
	  <input type="checkbox" class="form-control" name="extras" placeholder="Enter The Extras of The Caravan">
	</div>
	<div class="form-group">
		<label for="ExtrasOfCaravan">Description</label>
		<input type="text" class="form-control" name="description" placeholder="Enter The Extras of The Caravan">
	</div>
	<div class="form-group">
    	<label for="exampleInputFile">Multiple Picture Upload</label>
    	<input type="file" class="form-control-file" name="caravanPhotos[]" aria-describedby="fileHelp" multiple>
  	</div>
  	
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
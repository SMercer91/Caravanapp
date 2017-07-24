@extends('main')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Caravans <a href="{{route('caravan.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Caravan ID</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Size</th>
                                <th>Bedrooms</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Edit/Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Caravan ID</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Size</th>
                                <th>Bedrooms</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Edit/Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($caravan as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->model }}</td>
                                <td>{{ $value->year }}</td>
                                <td>{{ $value->size }}</td>
                                <td>{{ $value->bedrooms }}</td>
                                <td>{{ $value->price }}</td>
                                <td>{{ $value->description }}</td>
                                <td>
                                    <a href="{{route('caravan.edit', ['id' => $value->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{route('caravan.show', ['id' => $value->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                                
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
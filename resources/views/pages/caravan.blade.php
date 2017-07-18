@extends('main')

@section('content')
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Caravan Example</h1>
            </div>
        </div>

        <!-- Service Panels -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-responsive img-hover" src="images/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                                <h3>Images</h3>
                            <div class="row">      
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
                                <div class="col-md-2"><a href="#"><img class="thumbnail img-responsive" src="images/4.jpg"></a></div>
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
                                <h4>
                                    <a href="#">
                                        Caravan One
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in interdum mauris. Suspendisse semper volutpat massa eu ultrices. Praesent diam ligula, feugiat vel rutrum eget, lacinia sit amet est. In rutrum purus ac est mollis sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam feugiat tellus ipsum, vitae accumsan enim pharetra vitae. Morbi a elit nec sapien efficitur varius. Cras eu sollicitudin purus, nec convallis urna. Morbi viverra gravida ex a tristique. Curabitur in neque sagittis, auctor justo nec, pharetra lacus. Pellentesque tempus fringilla nisl vel dignissim.</p>

                                <p>Morbi vitae bibendum sapien. Mauris ac est eu justo convallis rhoncus. Integer velit nisi, tincidunt vitae congue ut, tincidunt a nisi. Praesent aliquam dignissim dui, nec tristique dui bibendum eu. Nam a orci dictum, dignissim nulla a, pharetra libero. Mauris quis fermentum lectus. Donec mollis odio augue. Ut sed mauris nulla. In viverra, urna in scelerisque rutrum, lorem nisl vestibulum arcu, varius egestas sapien nulla et nunc. Nullam lacinia ante venenatis, luctus enim nec, maximus neque. Phasellus nec nunc leo. Fusce sapien velit, bibendum id molestie et, lobortis et enim.</p>

                                Quisque vitae placerat mauris, vel fringilla nunc. Sed malesuada est eget nibh varius, eu pulvinar mi faucibus. Donec aliquet dapibus bibendum. Nam pulvinar fermentum odio, ut vulputate nisl euismod et. Cras scelerisque gravida purus, nec rutrum justo porta ut. Donec aliquam lorem fermentum mi faucibus, quis ultrices ipsum aliquet. Vivamus vel leo auctor, convallis lacus id, euismod dui. Vivamus arcu lacus, semper vel nibh non, consequat scelerisque ante. Fusce lectus metus, efficitur in maximus ut, venenatis quis metus. Sed volutpat augue nec lobortis molestie. Suspendisse eu cursus diam. Praesent fermentum faucibus nibh, et tincidunt diam consectetur et. Sed tempus consectetur leo nec maximus. Donec ut nulla laoreet arcu rutrum blandit in at sapien. Sed et purus id eros fermentum pretium quis eget tortor.</p>
                                <h2>£1000</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
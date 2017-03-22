@extends('index')

@section('title')
	Media
@endsection

@section('extra-css')
	{{Html::style('bsbmd/plugins/light-gallery/css/lightgallery.css')}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            CAROUSEL
            <small>All images taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
        </h2>
    </div>
    <div class="row clearfix">
        <!-- Basic Example -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>BASIC EXAMPLE</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="bsbmd/images/image-gallery/11.jpg" />
                            </div>
                            <div class="item">
                                <img src="bsbmd/images/image-gallery/12.jpg" />
                            </div>
                            <div class="item">
                                <img src="bsbmd/images/image-gallery/19.jpg" />
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example -->
        <!-- With Captions -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>WITH CAPTIONS</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="bsbmd/images/image-gallery/10.jpg" />
                                <div class="carousel-caption">
                                    <h3>First slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="bsbmd/images/image-gallery/12.jpg" />
                                <div class="carousel-caption">
                                    <h3>Second slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="bsbmd/images/image-gallery/19.jpg" />
                                <div class="carousel-caption">
                                    <h3>Third slide label</h3>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# With Captions -->
    </div>
</div>

<div class="container-fluid">
    <!-- Image Gallery -->
    <div class="block-header">
        <h2>
            IMAGE GALLERY
            <small>Taken from <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">sachinchoolur.github.io/lightGallery</a></small>
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        GALLERY
                        <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/1.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-1.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/2.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-2.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/3.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-3.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/4.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-4.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/5.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-5.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/6.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-6.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/7.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-7.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/8.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-8.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/9.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-9.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/10.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-10.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/11.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-11.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/12.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-12.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/13.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-13.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/14.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-14.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/15.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-15.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/16.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-16.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/17.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-17.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/18.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-18.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/19.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-19.jpg">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a href="bsbmd/images/image-gallery/20.jpg" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="bsbmd/images/image-gallery/thumb/thumb-20.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')
	{{Html::script('bsbmd/plugins/light-gallery/js/lightgallery-all.js')}}
	{{Html::script('bsbmd/js/pages/medias/image-gallery.js')}}
@endsection
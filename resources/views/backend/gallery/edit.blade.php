@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        @if($errors->count()>0)
            <ul class="alert alert-danger" style="list-style-type: none">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="box box-primary">
            <div class="box-header with-border" style="background-color: #c4e3f3;" >
                <h3 style="margin: 0px 5px; color: #0d6496;">
                    UPDATE IMAGE FROM GALLERY
                </h3>
            </div>
            <div class="box-body">
                @if(Session::has('fail'))
                    <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success"><p><strong>{{ Session::get('success') }}</strong></p></div>
                @endif
                <div class="row">
                    <form method="POST" action="{{ route('gallery.update',$gallery->id) }}" accept-charset="UTF-8" id="galleryCreate" class="galleryForm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <!-- Title Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <label for="title"><h3>TITLE</h3></label>
                                <input class="form-control" name="title" type="text" id="title" value="{{ $gallery->title }}">
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <!-- Image Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <label for="image"><h3>IMAGE</h3></label>
                                <p>
                                    @if(empty($gallery->image))
                                        <img id="image-show" src="{{ asset('images/noimage-admin.png') }}" alt="noimage" id="noimage" width="100%">
                                    @else
                                        <img id="image-show" src="{{ asset('/storage/gallery/'.$gallery->image) }}" alt="image" class="img-responsive" width="100%">
                                    @endif
                                </p>
                                <label for="image">Choose image from your computer</label>
                                <input class="form-control" name="image" type="file" id="image" onchange="viewImage(this)">
                                <br>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <!-- Submit Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <button type="submit" form="galleryCreate" class="btn btn-success" name="submit" value="SAVE"><i class="glyphicon glyphicon-edit"></i> SAVE</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
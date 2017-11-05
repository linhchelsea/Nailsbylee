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
                        UPDATE POLISH BRAND
                    </h3>
                </div>
                <div class="box-body">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                    @endif
                    <div class="row  col-lg-offset-1">
                        <form method="POST" action="{{ route('polishbrand.update', $polishbrand->id) }}" accept-charset="UTF-8" id="updateBrand" class="polishBrandForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <!-- Name Field -->
                                <div class="col-sm-10">
                                    <label for="name">Name</label>
                                    <input class="form-control" name="name" type="text" id="name" value="{{ $polishbrand->name }}" placeholder="{{ $polishbrand->name }}">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="description">Description</label>
                                    <textarea  class="form-control" name="description" id="description" rows="10" style="resize: none">{{ $polishbrand->description }}</textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Price Field -->
                                <div class="col-sm-10">
                                    <label for="price">Price</label>
                                    <input class="form-control" name="price" type="text" id="price" value="{{ $polishbrand->price }}" placeholder="{{ $polishbrand->price }}">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="image">Choose one photo of Polish Brand <span style="color: red;">(Ratio - width x height - 2:1)</span> </label>
                                    <input class="form-control" name="image" type="file" id="image" onchange="viewImage(this)">
                                    <br>
                                    @if (empty($polishbrand->image))
                                        <p><img id="image-show" src="{{ asset('/storage/polishbrand/noimage.png') }}" alt="avatar" class="img-responsive" width="300px" height="150px"></p>
                                    @else
                                        <p><img id="image-show" src="{{ asset('/storage/polishbrand/'.$polishbrand->image) }}" alt="avatar" class="img-responsive" width="300px" height="150px"></p>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Submit Field -->
                                <div class="col-sm-12">
                                    <button class="btn btn-warning" type="button" onclick="window.location='{{ url()->previous() }}';" style="margin-left: 5px;"><i class="fa fa-reply-all" aria-hidden="true"></i> BACK</button>
                                    <button type="submit" form="updateBrand" class="btn btn-primary" name="submit" value="UPDATE"><i class="glyphicon glyphicon-edit"></i> UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
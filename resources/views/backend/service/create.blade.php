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
                        ADD NEW SERVICE
                    </h3>
                </div>
                <div class="box-body">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                    @endif
                    <div class="row  col-lg-offset-1">
                        <form method="POST" action="{{ route('service.store') }}" accept-charset="UTF-8" id="service" class="serviceForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <!-- Name Field -->
                                <div class="col-sm-10">
                                    <label for="name">Name of service</label>
                                    <input class="form-control" name="name" type="text" id="name" value="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Preview Field -->
                                <div class="col-sm-10">
                                    <label for="preview">Preview</label>
                                    <input class="form-control" name="preview" type="text" id="preview" value="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="description">Description</label>
                                    <textarea  class="form-control" name="description" id="description" rows="10" style="resize: none"></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="image">Choose one photo of Service <span style="color: red;">(Ratio - width x height - 1:1)</span> </label>
                                    <input class="form-control" name="image" type="file" id="image" onchange="viewImage(this)">
                                    <br>
                                    <p><img id="image-show" src="{{ asset('/storage/default.png') }}" alt="no-image" class="img-responsive" width="200px" height="200px"></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Submit Field -->
                                <div class="col-sm-12">
                                    <button class="btn btn-warning" type="button" onclick="window.location='{{ url()->previous() }}';" style="margin-left: 5px;"><i class="fa fa-reply-all" aria-hidden="true"></i> BACK</button>
                                    <button type="submit" form="service" class="btn btn-primary" name="submit" value="CREATE"><i class="glyphicon glyphicon-edit"></i> CREATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
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
                        ADD NEW SERVICE DETAIL
                    </h3>
                </div>
                <div class="box-body">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                    @endif
                    <div class="row">
                        <form method="POST" action="{{ route('service-detail.store') }}" accept-charset="UTF-8" id="service-detail" class="service-detailForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <!-- Name Field -->
                                <div class="col-sm-6">
                                    <label for="name">Name of service detail</label>
                                    <input class="form-control" name="name" type="text" id="name" value="">
                                </div>
                                <!-- Name Field -->
                                <div class="col-sm-6">
                                    <label for="name">Service</label>
                                    <select name="service" id="service" class="form-control">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Preview Field -->
                                <div class="col-sm-6">
                                    <label for="price">Price ($)</label>
                                    <input class="form-control" name="price" type="text" id="price" value="">
                                </div>
                                <!-- Preview Field -->
                                <div class="col-sm-6">
                                    <label for="time">Time</label>
                                    <input class="form-control" name="time" type="text" id="time" value="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="description">Description</label>
                                    <textarea  class="form-control" name="description" id="description" rows="10" style="resize: none"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label for="image">Choose one photo of Service detail <span style="color: red;">(Ratio - width x height - 2:1)</span> </label>
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
                                    <button type="submit" form="service-detail" class="btn btn-primary" name="submit" value="CREATE"><i class="glyphicon glyphicon-edit"></i> CREATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
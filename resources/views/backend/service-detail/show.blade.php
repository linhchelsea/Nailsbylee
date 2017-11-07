@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>
                <div class="box box-primary">
                    <div class="box-header" style="background-color: #f4f4f4; ">
                        <h3 class="pull-left" style="margin: 4px 5px 0px 5px;">
                            SERVICE DETAIL
                        </h3>
                        <div class="pull-right" style="margin: 0px 10px;">
                            <a class="btn btn-success pull-right" href="{{ route('service-detail.create') }}"><i class="glyphicon glyphicon-plus"></i> New service detail</a>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-responsive table-bordered" id="detail-table">
                            <thead>
                                <tr class="info">
                                    <th class="text-center" colspan="2"><h4>SERVICE DETAIL</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $serviceDetail->name }}</td>
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td>{{ $serviceDetail->serviceName }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $serviceDetail->price }}$</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>{{ $serviceDetail->time }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $serviceDetail->description }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td class="text-success">{{ $serviceDetail->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td class="text-danger">{{ $serviceDetail->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        @if(empty($serviceDetail->image))
                                            <img src="{{ asset('images/noimage-admin.png') }}" alt="noimage" id="noimage" width="400px" height="200px">
                                        @else
                                            <img src="{{ asset('/storage/service-detail/'.$serviceDetail->image) }}" alt="image" id="service" width="400px" height="200px">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-warning" type="button" onclick="window.location='{{ url()->previous() }}';" style="margin-top: 15px;"><i class="fa fa-reply-all" aria-hidden="true"></i> BACK</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
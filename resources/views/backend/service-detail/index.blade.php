@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <script src="{{ asset('admin/js/function/featureservice.js') }}" type="text/javascript"></script>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success"><p><strong>{{ Session::get('success') }}</strong></p></div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                @endif
                <div class="clearfix"></div>
                <div class="box box-defautl">
                <div class="box-header" style="background-color: #f4f4f4; ">
                        <h3 class="pull-left" style="margin: 4px 5px 0px 5px;">
                            SERVICE DETAIL
                        </h3>
                        <div class="pull-right" style="margin: 0px 10px;">
                            <a class="btn btn-success pull-right" href="{{ route('service-detail.create') }}"><i class="glyphicon glyphicon-plus"></i> New service detail</a>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Service</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center" colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($serviceDetails) > 0)
                                @foreach($serviceDetails as $service)
                                    <tr>
                                        <td class="text-center">{{ $service->id }}</td>
                                        <td class="text-center" style="width: 20%">{{ $service->name }}</td>
                                        <td class="text-center" style="width: 15%">{{ $service->serviceName }}</td>
                                        <td class="text-center">{{ $service->price }} $</td>
                                        <td class="text-center">{{ $service->time }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/service-detail/'.$service->image) }}" alt="image" id="service" width="200px" height="100px">
                                        </td>
                                        <td class="text-center">
                                            <form method="POST" action="{{ route('service-detail.destroy', $service->id) }}" accept-charset="UTF-8">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <div class='btn-group'>
                                                    <a href="{{ route('service-detail.show', $service->id) }}" class='btn btn-primary'>Detail</a>
                                                    <a href="{{ route('service-detail.edit', $service->id) }}" class='btn btn-warning'>Edit</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm(&#039;You want to remove this service?&#039;)">
                                                        Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center text-blue">
                                        <h4><span style="font-style: inherit">No detail of service to show</span></h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            {{ $serviceDetails->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
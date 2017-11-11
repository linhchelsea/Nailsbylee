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
                            SERVICES
                        </h3>
                        <div class="pull-right" style="margin: 0px 10px;">
                            <a class="btn btn-success pull-right" href="{{ route('service.create') }}"><i class="glyphicon glyphicon-plus"></i> New service</a>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Name of service</th>
                                    <th class="text-center">Preview text</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Feature service</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($services) > 0)
                                @foreach($services as $service)
                                    <tr>
                                        <td class="text-center" >{{ $service->id }}</td>
                                        <td class="text-center" style="width: 20%">{{ $service->name }}</td>
                                        <td style="width: 40%">{{ $service->preview }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/service/'.$service->image) }}" alt="image" id="service" width="200px" height="200px" class="indexImage">
                                        </td>
                                        <td class="text-center" style="width: 20%">
                                            <input style="height: 20px; width: 20px;" type="checkbox" name="feature" {{ ($service->atHome == 1)? "checked=\"true\"" : '' }} onclick="feature({{$service->id}}, '{{ route('updateFeatureService') }}');" class="feature" id="feature_{{$service->id}}" />
                                        </td>
                                        <td class="text-center">
                                            <form style="width: 190px;" method="POST" action="{{ route('service.destroy', $service->id) }}" accept-charset="UTF-8">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <div class='btn-group'>
                                                    <a href="{{ route('service.show', $service->id) }}" class='btn btn-info'>Detail</a>
                                                    <a href="{{ route('service.edit', $service->id) }}" class='btn btn-warning'>Edit</a>
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
                                        <h4><span style="font-style: inherit">No service to show</span></h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            {{ $services->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
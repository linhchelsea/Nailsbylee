@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
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
                            POLISH BRANDS
                        </h3>
                        <div class="pull-right" style="margin: 0px 10px;">
                            <a class="btn btn-success pull-right" href="{{ route('polishbrand.create') }}"><i class="glyphicon glyphicon-plus"></i> New review</a>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Price ($)</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($polishBrand) > 0)
                                @foreach($polishBrand as $brand)
                                    <tr>
                                        <td class="text-center" style="width: 20%">{{ $brand->id }}</td>
                                        <td class="text-center" style="width: 20%">{{ $brand->name }}</td>
                                        <td style="width: 40%">{{ $brand->description }}</td>
                                        <td class="text-center" style="width: 20%">{{ $brand->price }}</td>
                                        <td class="text-center">
                                            @if(empty($brand->image))
                                                <img src="{{ asset('/storage/polishbrand/noimage.png') }}" alt="noimage" id="noimage" width="300px" height="150px">
                                            @else
                                                <img src="{{ asset('/storage/polishbrand/'.$brand->image) }}" alt="image" id="polishbrand" width="300px" height="150px">
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form style="width: 130px;" method="POST" action="{{ route('polishbrand.destroy', $brand->id) }}" accept-charset="UTF-8">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <div class='btn-group'>
                                                    <a href="{{ route('polishbrand.edit', $brand->id) }}" class='btn btn-warning'>Edit</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm(&#039;You want to remove this image?&#039;)">
                                                        Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center text-blue">
                                        <h4><span style="font-style: inherit">No Polish Brand to show</span></h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            {{ $polishBrand->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
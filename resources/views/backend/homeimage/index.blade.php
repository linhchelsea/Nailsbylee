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
                            HOME IMAGE
                        </h3>
                        <div class="pull-right" style="margin: 0px 10px;">
                            <a class="btn btn-success pull-right" href="{{ route('home-image.create') }}"><i class="glyphicon glyphicon-plus"></i> New image</a>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50%">Title</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center" colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($homeImages) > 0)
                                @foreach($homeImages as $homeImage)
                                    <tr>
                                        <td class="text-center" style="width: 50%">{{ $homeImage->title }}</td>
                                        <td class="text-center">
                                             <img src="{{ asset('/storage/home-image/'.$homeImage->name) }}" alt="image" width="200px" class="indexImage">
                                        </td>
                                        <td class="text-center">
                                            <form method="POST" action="{{ route('home-image.destroy', $homeImage->id) }}" accept-charset="UTF-8">
                                                <input name="_method" type="hidden" value="DELETE">
                                                {{ csrf_field() }}
                                                <div class='btn-group'>
                                                    <a href="{{ route('home-image.edit', $homeImage->id) }}" class='btn btn-warning'>Edit</a>
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
                                        <h4><span style="font-style: inherit">NO IMAGE TO SHOW</span></h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            {{ $homeImages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
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
                <div class="box box-default">
                    <div class="box-header" style="background-color: #f4f4f4; ">
                        <h3 class="pull-left" style="margin: 4px 5px 0px 5px;">
                            CONTACT
                        </h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-responsive table-bordered" id="tours-table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone number</th>
                                    <th class="text-center" width="150px">Sent at</th>
                                    <th class="text-center" width="110px">Status</th>
                                    <th class="text-center" width="100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($contacts) < 1)
                                <td  class="text-center  text-blue" colspan="8">
                                    <h4><span style="font-style: inherit">NO MESSAGE TO SHOW!</span></h4>
                                </td>
                            @else
                            @foreach($contacts as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->phone }}</td>
                                    <td class="text-center">{{$item->created_at}}</td>
                                    <td class="text-center">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <div class="reply_{{ $item->id }}">
                                        @if($item->reply == 0)
                                            <a href="javascript:void(0)" class="btn btn-danger reply"onclick="replyContact({{$item->id}});">WAITING...</a>
                                        @else
                                            <span class="btn btn-success reply">REPLIED</span>
                                        @endif
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('adcontact.destroy',$item->id) }}" accept-charset="UTF-8">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <div class='btn-group'>
                                                <a href="{{ route('adcontact.show',$item->id) }}" class='btn btn-warning'>
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger" onclick="return confirm(&#039;You want to remove this contact?&#039;)">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="pagination-sm no-margin pull-right">
                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
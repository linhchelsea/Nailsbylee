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
                    INFORMATION
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
                    <form method="POST" action="{{ route('inforUpdate') }}" accept-charset="UTF-8" id="information" class="informationForm">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="name">Name</label>
                                <input class="form-control" name="name" type="text" id="name" value="{{ $information->name }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input class="form-control" name="email" type="email" id="email" value="{{ $information->email }}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="phone">Phone</label>
                                <input class="form-control" name="phone" type="text" id="phone" value="{{ $information->phone }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="facebook">Facebook</label>
                                <input class="form-control" name="facebook" type="text" id="facebook" value="{{ $information->facebook }}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="instagram">Instagram</label>
                                <input class="form-control" name="instagram" type="text" id="instagram" value="{{ $information->instagram }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" name="twitter" type="text" id="twitter" value="{{ $information->twitter }}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="address">Address</label>
                                <input class="form-control" name="address" type="text" id="address" value="{{ $information->address }}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" form="information" class="btn btn-primary" name="submit" value="Update"><i class="glyphicon glyphicon-edit"></i> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
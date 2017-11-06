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
                        UPDATE REVIEW
                    </h3>
                </div>
                <div class="box-body">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger"><p><strong>{{ Session::get('fail') }}</strong></p></div>
                    @endif
                    <div class="row  col-lg-offset-1">
                        <form method="POST" action="{{ route('review.update', $review->id) }}" accept-charset="UTF-8" id="updateReview" class="reviewForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <!-- Fullname Field -->
                                <div class="col-sm-10">
                                    <label for="fullname">Customer's full name</label>
                                    <input class="form-control" name="fullname" type="text" id="fullname" value="{{ $review->name }}">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="reviewContent">Content of review</label>
                                    <textarea  class="form-control" name="reviewContent" id="reviewContent" rows="10" style="resize: none">{{ $review->content }}</textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label for="image">Choose one photo of customer</label>
                                    <input class="form-control" name="image" type="file" id="image" onchange="viewImage(this)">
                                    <br>
                                    <p>
                                        @if(empty($review->image))
                                            <img id="image-show" src="{{ asset('images/noimage-admin.png') }}" alt="noimage" id="noimage" width="200px" height="200px">
                                        @else
                                            <img id="image-show" src="{{ asset('/storage/reviews/'.$review->image) }}" alt="avatar" class="img-responsive" width="200px" height="200px">
                                        @endif
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!-- Submit Field -->
                                <div class="col-sm-12">
                                    <button class="btn btn-warning" type="button" onclick="window.location='{{ url()->previous() }}';" style="margin-left: 5px;"><i class="fa fa-reply-all" aria-hidden="true"></i> BACK</button>
                                    <button type="submit" form="updateReview" class="btn btn-primary" name="submit" value="UPDATE"><i class="glyphicon glyphicon-edit"></i> UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
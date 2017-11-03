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
                    UPDATE GIFT CARD
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
                    <form method="POST" action="{{ route('gift-card.update',$giftCard->id) }}" accept-charset="UTF-8" id="giftCardUpdate" class="giftCardForm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <!-- Title Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <label for="title"><h3>TITLE</h3></label>
                                <input class="form-control" name="title" type="text" id="title" value="{{ $giftCard->title }}">
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <!-- Image Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <label for="image"><h3>CARD</h3></label>
                                <input class="form-control" name="image" type="file" id="image" onchange="viewImage(this)">
                                <p><img id="image-show" src="{{ asset('/storage/gift-card/'.$giftCard->image) }}" alt="image" class="img-responsive" width="100%"></p>
                                <br>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <!-- Submit Field -->
                            <div class="col-sm-10 col-lg-offset-1">
                                <button type="submit" form="giftCardUpdate" class="btn btn-success" name="submit" value="SAVE"><i class="glyphicon glyphicon-edit"></i> SAVE</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        CKEDITOR.replace('intro', {
            filebrowserBrowseUrl: "{{ asset('admin/js/ckfinder/ckfinder.html') }}",
            filebrowserImageBrowseUrl: "{{ asset('admin/js/ckfinder/ckfinder.html?type=Images') }}",
            filebrowserFlashBrowseUrl: "{{ asset('admin/js/ckfinder/ckfinder.html?type=Flash') }}",
            filebrowserUploadUrl: "{{ asset('admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
            filebrowserImageUploadUrl: "{{ asset('admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
            filebrowserFlashUploadUrl: "{{ asset('admin/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
        });
    </script>
    <!-- Modal Upload File -->
    <div class="modal fade" id="myModalUpload" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Media...</h4>
                </div>
                <form method="post" action="{{ route('aboutUsSaveVideo') }}" enctype="multipart/form-data" id="upload-file">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="upload">Choose File:</label>
                            <input type="file" class="form-control" id="video" name="video" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
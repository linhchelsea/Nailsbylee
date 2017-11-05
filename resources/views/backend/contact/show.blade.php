@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>
                <div class="box box-default">
                    <div class="box-header" style="background-color: #f4f4f4; ">
                        <h3 class="pull-left" style="margin: 4px 5px 0px 5px;">
                            CONTACT DETAIL
                        </h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-responsive table-bordered" id="contact-table">

                            <tbody>
                                <tr>
                                    <td class="text-bold">ID</td>
                                    <td>{{ $contact->id }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Customer's name</td>
                                    <td>{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Email</td>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Phone number</td>
                                    <td>{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Message</td>
                                    <td class="contactMsg">{{ $contact->message }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Created At</td>
                                    <td>{{ $contact->created_at }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Status</td>
                                    <td>
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <div class="reply">
                                        @if($contact->reply == 0)
                                            <span style="font-weight: bold; color: red;">Waiting...</span>
                                            <a href="javascript:void(0)" class="btn btn-warning" onclick="replyContact({{$contact->id}});" style="font-weight: bold; color: black; margin-left: 50px">REPLY</a>
                                        @else
                                        <span style="font-weight: bold; color: green;">Replied</span>
                                        @endif
                                        </div>
                                    </td>
                                </tr>
                                @if($contact->reply == 1)
                                <tr>
                                    <td class="text-bold">Replied At</td>
                                    <td>{{ $contact->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">User</td>
                                    <td>
                                        {{ $contact->user }}
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <br>
                        <button class="btn btn-warning" type="button" onclick="window.location='{{ route('adcontact.index') }}';" style="margin-top: 15px;"><i class="glyphicon glyphicon-remove"></i> BACK</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function replyContact(id){
            if(confirm("Bạn đã trả lời liên hệ này?")){
                $.ajax({
                    url: "{{ route('replyContact') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'post',
                    cache: false,
                    data: {
                        'id': id
                    },
                    success: function (data) {
                        location.reload();
                    },
                    error: function () {
                        alert("error");
                    }
                });
            }
        }
    </script>
</div>

@stop
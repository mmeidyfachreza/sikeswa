@extends('layouts.layout')

@section('custom-style')
<style type="text/css">
    body {
        margin-top: 20px;
        background: #f5f5f5;
    }

    .card {
        border: none;
        -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        margin-bottom: 30px;
    }

    .w-80 {
        width: 65px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0 0 10px;
        font-weight: 600;
    }

    .social-links li a {
        -webkit-border-radius: 50%;
        background-color: rgba(89, 206, 181, .85);
        border-radius: 50%;
        color: #fff;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        text-align: center;
        width: 30px;
        font-size: 12px;
    }

    a {
        color: #707070;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Pencarian</h5>
        </div>
        <div class="card-body">

                <div class="form-group form-group-typeahead">
                    <input id="typeahead4" type="text" placeholder="Nama Siswa..." class="form-control">
                </div>
                <div class="form-group form-group-typeahead">
                    <input id="typeahead3" type="text" placeholder="Kelas Siswa..." class="form-control">
                </div>

        </div>
    </div>

    <div class="row">
        @foreach ($students as $item)
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-4">
                        <a href=""><img src="{{asset('uploads/avatars/'.$item->avatar)}}" alt="" class=" w-80"></a>
                    </div>
                    <div class="col-8 card-title align-self-center mb-0">
                        <h5>{{$item->name}}</h5>
                        <p class="m-0">Kelas A</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email : <a
                            href="#">PaulGoyette@gmail.com</a></li>
                    <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : 000 123-456</li>
                </ul>
                <div class="card-body">
                    <div class="float-right btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip"
                            data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                        <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip"
                            data-original-title="Delete"><i class="fa fa-times"></i></a>
                    </div>
                    <ul class="social-links list-inline mb-0">
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                class="tooltips" href="" data-original-title="Facebook"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('custom-script')
    {{-- <script src="{{asset('template/vendor/bootstrap-3-typeahead/bootstrap3-typeahead.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@endsection

@section('script')
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });

        $.ajax('http://localhost:8000/api/getnames', {
            type: 'GET',
            global: false,
            async: false,
            dataType: 'json',
        }).then(
            function success(data) {
                $('#typeahead4').typeahead({
                    scrollHeight: 5,
                    items: 2,
                    fitToElement: true,
                    source: data.data,
                    updater: function(item){
                        console.log(item)
                        return item
                    }
                });
            }
        );

    })

</script>
@endsection

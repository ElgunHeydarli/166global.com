@extends('admin.layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Partnyor redakt et</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Partnyor redakt et</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        Aşağıda qeyd olunan inputları doldurmağınız tələb olunur
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('admin.partner.update',$partner->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="title" value="{{$partner->title}}" >
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Şəkil</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Şəkil</label>
                                        <div class="col-sm-10">
                                            <img style="width: 300px;" src="{{asset('image/'.$partner->image)}}" alt="">                                        </div>
                                    </div>


                                    <div class="row mb-3">

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Yadda saxla</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div> <!-- end col -->
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
@endsection

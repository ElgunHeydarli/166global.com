@extends('admin.layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Haqqımızda səhifəsi</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Haqqımızda</h4>

                                <form action="{{route('admin.about.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Azərbaycan dili</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">İngilis dili</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Russ dili</span>
                                        </a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">
                                        <p class="mb-0">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq <span style="color: red">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="title_az" type="text" value="{{$about->title_az}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Ətraflı mətn <span style="color: red">*</span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description_az" id="editor" cols="30" rows="10">{{$about->description_az}}</textarea>
                                            </div>
                                        </div>

                                        </p>
                                    </div>
                                    <div class="tab-pane" id="profile-1" role="tabpanel">
                                        <p class="mb-0">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="title_en" type="text" value="{{$about->title_en}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Ətraflı mətn</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description_en" id="editor1" cols="30" rows="10">{{$about->description_en}}</textarea>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="messages-1" role="tabpanel">
                                        <p class="mb-0">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq </label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="title_ru" type="text" value="{{$about->title_ru}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Ətraflı mətn</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description_ru" id="editor2" cols="30" rows="10">{{$about->description_ru}}</textarea>
                                            </div>
                                        </div>
                                        </p>
                                    </div>

                                </div>


                                    <button type="submit" class="btn btn-primary">Yadda saxla</button>


                        </form>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upcube.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
@endsection

@extends('admin.layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Ölkə əlavə et</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Ölkələr</h4>


                                <form action="{{route('admin.olke.store')}}" method="post" enctype="multipart/form-data">
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

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="title_az">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Qısa mətn</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="description_az">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane" id="profile-1" role="tabpanel">

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="title_en">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Qısa mətn</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="description_en">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane" id="messages-1" role="tabpanel">

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Başlıq</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="title_ru">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Qısa mətn</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="description_ru">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="link">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Şəkil</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                    </div>

                                </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"> Yadda saxla</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
@endsection

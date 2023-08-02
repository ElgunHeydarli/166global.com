@extends('admin.layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Tənzimləmələr səhifəsi</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Tənzimləmələr səhifəsi</h4>
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
                                <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Title Seo</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="title" value="{{$setting->title}}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Keywords Seo</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="keywords" value="{{$setting->keywords}}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Description Seo</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="description" value="{{$setting->description}}"  >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Əlaqə nömrəsi</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="phone" value="{{$setting->phone}}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="email" value="{{$setting->email}}">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Ünvan Az</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="adress_az" value="{{$setting->adress_az}}" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Ünvan En</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="adress_en" value="{{$setting->adress_en}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Ünvan Ru</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="adress_ru" value="{{$setting->adress_ru}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Facebook </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="facebook" value="{{$setting->facebook}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">İnstagram</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="instagram" value="{{$setting->instagram}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Linkedin</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="linkedin" value="{{$setting->linkedin}}">
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
                                            <img style="width: 200px;" src="{{asset('image/'.$setting->image)}}" alt="">                                        </div>
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

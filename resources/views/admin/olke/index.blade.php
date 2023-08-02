@extends('admin.layouts.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Ölkələr</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Ölkələr</h4>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>İD</th>
                                        <th>Title</th>
                                        <th>Şəkil</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($olkes as $olke)
                                        <tr>
                                            <td>{{$olke->id}}</td>
                                            <td>{{$olke->title_az}}</td>
                                            <td><img style="width: 100px;" src="{{asset('image/'.$olke->image)}}" alt=""></td>
                                            <td>
                                                <input type="checkbox" data-id="{{ $olke->id }}" name="status" class="js-switch" {{ $olke->status == 1 ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.olke.edit',$olke->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                                <a href="{{route('admin.olke.destroy',$olke->id)}}" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <!-- end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>

    <script>
        $(document).ready(function(){
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('status.olke') }}',
                    data: {'status': status, 'olke_id': userId},
                    success: function (data) {
                        console.log(data.message);
                    }
                });
            });
        });
    </script>




    <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });</script>


@endsection

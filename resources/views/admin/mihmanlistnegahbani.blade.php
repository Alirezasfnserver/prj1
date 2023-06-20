@extends("admin.master")
@section("content")


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">لیست میهمانان جاری</h3>
                </div>
            @include('flash-message')
                <!-- /.box-header -->
                <div class="box-body" id="listneg">

                </div>
                <!-- /.box-body -->

            </div>
@endsection
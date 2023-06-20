@extends("admin.master")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">افزودن اطلاعیه</h3>
                </div>
            @include('flash-message')
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/newnotf">
                    {{ csrf_field() }}
                    <input type="hidden" id="tarikh" name="tarikh" class="form-control pull-right">
                    <input type="hidden" name="vaz" class="name agileits" value="0" />
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">متن اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="text" placeholder="">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>




@endsection
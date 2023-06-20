@extends("admin.master")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">افزودن میهمان</h3>
                </div>
            @include('flash-message')
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/mihmansabt">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" class="name agileits" value="{{ Auth::user()->id }}" />
                    <input type="hidden" name="vaz" class="name agileits" value="میهمان وارد مجموعه نشده است" />
                    <input type="hidden" name="vaz2" class="name agileits" value="0" />
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="نام و نام خانوادگی" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تلفن همراه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="تلفن همراه">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">میزبان</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="mizban" placeholder="میزبان" required>
                        </div>
                        <div class="form-group">
                            <label>انتخاب تاریخ و ساعت حضور </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" id="tarikh" name="tarikh1" class="form-control pull-right">

                            </div>
                            <!-- /.input group -->

                        </div>
                        <div class="form-group">
                        <label>
                            <input type="checkbox" name="parking" value="مجاز به استفاده از پارکینگ">
                            استفاده از پارکینگ
                        </label>
                    </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="nahar" value="ناهار دارد">
                                ناهار
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="wifi" value="مجاز به استفاده از اینترنت ">
                               دسترسی به اینترنت
                            </label>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>




@endsection
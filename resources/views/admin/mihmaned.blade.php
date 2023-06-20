@extends("admin.master")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">ویرایش میهمان</h3>
                </div>
            @include('flash-message')
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/mihmanedi">
                    {{ csrf_field() }}
                    @foreach($items as $item)
                        <input type="hidden" name="idh" value="{{$item->id}}" >
                    <input type="hidden" name="user_id" class="name agileits" value="{{ Auth::user()->id }}" />
                    <input type="hidden" name="vaz" class="name agileits" value="میهمان وارد مجموعه نشده است" />
                    <input type="hidden" name="vaz2" class="name agileits" value="0" />
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$item->name}}"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تلفن همراه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="{{$item->phone}}" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">میزبان</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="mizban" value="{{$item->mizban}}"  >
                        </div>
                        <div class="form-group">
                            <label>انتخاب تاریخ و ساعت حضور </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" id="tarikh" name="tarikh1" value="{{$item->tarikh1}}" class="form-control pull-right">

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
@endforeach
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ویرایش</button>
                    </div>
                </form>
            </div>




@endsection
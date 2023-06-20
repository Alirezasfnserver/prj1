@extends("admin.master")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست کالا</h3>
                </div>
            @include('flash-message')
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/kalaup">
                    {{ csrf_field() }}
                    @foreach($items as $item)


                        <input type="hidden" name="idh" value="{{$item->id}}" >
                        <table class="table table-bordered">
                            <tr>
                                <th> درخواست کننده</th>
                                <th>واحد/مجموعه</th>
                                <th>نام کالا</th>
                                <th>تعداد</th>
                                <th>تاریخ درخواست</th>
                                <th>توضیحات</th>
                                <th>وضعیت</th>


                            </tr>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->vahed}}</td>
                                    <td>{{$item->kala}}</td>
                                    <td>{{$item->tedad}}</td>
                                    <td>{{$item->tarikh1}}</td>
                                    <td>{{$item->dec}}</td>
                                    <td>{{$item->vaz1}}</td>


                                </tr>
                            @endforeach
                        </table>
                        <div class="form-group">
                            <label for="exampleInputPassword1">مسئول انجام</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="mas" placeholder="" value="{{$item->mas}}" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">تحویل گیرنده</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="tah" placeholder="" value="{{$item->tah}}" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">قیمت به ریال</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="" value="{{$item->price}}" >

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">توضیحات محرمانه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="t2" placeholder="" value="{{$item->t2}}" >

                        </div>
                        <label>وضعیت</label>
                        <select class="form-control" name="vaz1">
                            <option value="{{$item->vaz1}}" selected>{{$item->vaz1}}</option>
                            <option value="در انتظار تایید">در انتظار تایید</option>
                            <option value="ثبت سفارش و تایید نهایی">ثبت سفارش و تایید نهایی</option>
                            <option value="کالا آماده تحویل می باشد">کالا آماده تحویل می باشد</option>
                        </select>
                    </div>
                @endforeach
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>




@endsection
@extends("admin.master")
@section("content")


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست های جاری</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th> درخواست کننده</th>
                            <th>واحد/مجموعه</th>
                            <th>نام کالا</th>
                            <th>تعداد</th>
                            <th>تاریخ درخواست</th>
                            <th>توضیحات</th>
                            <th>وضعیت</th>
                            <th>مشاهده/ویرایش</th>
                            <th>ثبت تحویل / اتمام فرایند</th>

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
                                <td><a href="/kalaed/{{$item->id}}" class="btn btn-success" role="button">ویرایش</a></td>
                                <td><form method="post" enctype="multipart/form-data" action="/kalaup2">
                                        {!! csrf_field()  !!}

                                        <input type="hidden" name="idh" value="{{$item->id}}" >
                                        <input type="hidden" name="vaz1" value="کالا تحویل واحد مربوطه گردید" >
                                        <input type="hidden" id="tarikhs" name="tarikh2" class="form-control pull-right">
                                        <button type="submit" class="btn btn-danger">ثبت تحویل</button>
                                    </form></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
@endsection
@extends("admin.master")
@section("content")


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">لیست اطلاعیه ها</h3>
                </div>
                <a class="btn btn-app" href="/newnotfi">
                    <i class="fa fa-edit"></i> افزودن
                </a>
            @include('flash-message')
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>عنوان</th>
                            <th>متن</th>
                            <th>تاریخ انتشار</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->text}}</td>
                                <td>{{$item->tarikh}}</td>

                                <td><a href="/tabloedit/{{$item->id}}" class="btn btn-success" role="button">ویرایش</a></td>
                                <td><form method="post" enctype="multipart/form-data" action="/tablohazf">
                                        {!! csrf_field()  !!}

                                        <input type="hidden" name="idh" value="{{$item->id}}" >

                                        <input type="hidden" name="vaz" value="1" >

                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
@endsection
@extends("admin.master")
@section("content")


    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">درخواست های شما</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>نام کالا</th>
                            <th>تعداد</th>
                            <th>تاریخ درخواست</th>
                            <th>توضیحات</th>
                            <th>وضعیت</th>
                            <th>تاریخ تحویل</th>

                        </tr>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->kala}}</td>
                                <td>{{$item->tedad}}</td>
                                <td>{{$item->tarikh1}}</td>
                                <td>{{$item->dec}}</td>
                                <td>{{$item->vaz1}}</td>
                                <td>{{$item->tarikh2}}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
@endsection
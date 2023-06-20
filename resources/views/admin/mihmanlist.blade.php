@extends("admin.master")
@section("content")


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">لیست میهمانان شما</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>

                        <th>نام میهمان</th>
                        <th>شماره تماس</th>
                        <th>تاریخ دعوت</th>
                        <th>میزبان</th>
                        <th>#</th>
                        <th>#</th>
                        <th>وضعیت</th>
                        <th>ویرایش</th>
                    </tr>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->tarikh1}}</td>
                        <td>{{$item->mizban}}</td>
                        <td>{{$item->nahar}}#</td>
                        <td>{{$item->parking}}#</td>
                        <td>{{$item->vaz}}</td>
                        <td><a href="/mihmaned/{{$item->id}}" class="btn btn-success" role="button">ویرایش</a></td>

                    </tr>
                        @endforeach
                </table>
            </div>
            <!-- /.box-body -->

        </div>
    @endsection
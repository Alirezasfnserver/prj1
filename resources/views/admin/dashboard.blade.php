@extends("admin.master")
@section("content")


    <!-- Main content -->

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>دبیرخانه</h3>

                        <p> ارسال نامه / مدیریت نامه ها</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#" class="small-box-footer">ورود <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" >
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>منابع انسانی</h3>

                        <p>حضور و غیاب / مرخصی</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">ورود <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>مدیریت میهمانان</h3>

                        <p>افزودن میهمان</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/newmihman" class="small-box-footer">ورود <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>مدیریت جلسات</h3>

                        <p>ثبت جلسات </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-black-tie"></i>
                    </div>
                    <a href="#" class="small-box-footer">ورود <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <section class="col-lg-12 col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-info-circle"></i>
                        <h3 class="box-title">تابلو اعلانات شرکت درخواست کننده</h3>
                        <!-- tools box -->
                        <div class="pull-left box-tools">
                            <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        @foreach($items as $item)
                        <h4>{{$item->name}}</h4>

                        <p>{{$item->text}}</p>
                        <br>
@endforeach

                </div>
            </section>
        </div>











    @endsection
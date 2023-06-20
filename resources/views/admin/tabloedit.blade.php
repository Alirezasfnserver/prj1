@extends("admin.master")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">ویرایش اطلاعیه</h3>
                </div>
            @include('flash-message')
            <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" enctype="multipart/form-data" action="/tabloed">
                    {{ csrf_field() }}

                    @foreach($items as $item)
                        <input type="hidden" name="idh" value="{{$item->id}}" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="{{$item->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">متن اطلاعیه</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="text" value="{{$item->text}}" placeholder="">
                        </div>

                    </div>
                    @endforeach
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ویرایش</button>
                    </div>
                </form>
            </div>




@endsection
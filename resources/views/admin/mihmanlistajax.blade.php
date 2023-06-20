<table class="table table-bordered">
    <tr>

        <th>نام میهمان</th>
        <th>شماره تماس</th>
        <th>تاریخ دعوت</th>
        <th>میزبان</th>
        <th>#</th>
        <th>#</th>
        <th>وضعیت</th>
        <th>ورود</th>
        <th>خروج</th>
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
            <td><form method="post" enctype="multipart/form-data" action="/mihmanup1">
                    {!! csrf_field()  !!}

                    <input type="hidden" name="idh" value="{{$item->id}}" >
                    <input type="hidden" name="vaz" value="میهمان وارد مجموعه شده است" >
                    <input type="hidden" id="tarikh" name="tarikh2" class="form-control pull-right">
                    <button type="submit" class="btn btn-success">ورود</button>
                </form></td>
            <td><form method="post" enctype="multipart/form-data" action="/mihmanup2">
                    {!! csrf_field()  !!}

                    <input type="hidden" name="idh" value="{{$item->id}}" >
                    <input type="hidden" name="vaz" value="میهمان از مجموعه خارج شده است" >
                    <input type="hidden" name="vaz2" value="1" >
                    <input type="hidden" id="tarikhs" name="tarikh3" class="form-control pull-right">
                    <button type="submit" class="btn btn-danger">خروج</button>
                </form></td>


        </tr>
    @endforeach
</table>
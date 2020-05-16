@if($binhluan!=null)
                                                            @foreach($binhluan as $rows)
                                                            <div style="display: flex;">
                                                                <img src="{{url('/')}}/victory.png">
                                                                <div style="font-size:20px">{{$rows->name}}</div>
                                                                <div style="margin-left: 40px">{{$rows->binhluan}}</div>
                                                            </div>
                                                            <p style="float: right;position: relative;bottom: 128px;">{{$rows->ngay}}</p>
                                                            @endforeach
                                                            @endif
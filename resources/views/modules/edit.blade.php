@extends('welcome')
@section('content1')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Cập nhật</h4>
                        </div>
                        <div class="card-body ">
                            <form method="post" action="" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Tên thuốc:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tenthuoc" class="form-control" placeholder="Tên thuốc . . ." value="{{ $info->tenthuoc }}">
                                                <p class="text-danger">{{$errors->first('tenthuoc')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Số lượng</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng . . ." value="{{ $info->soluong }}">
                                                <p class="text-danger">{{$errors->first('soluong')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Ngày hết hạn:</label>
                                            <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" name='ngayhethan' placeholder="Chọn ngày" value="{{ $info->ngayhethan }}" />
                                                    <p class="text-danger">{{$errors->first('ngayhethan')}}</p>
                                            </div>
                                            <script>
                                                $('.datepicker').datetimepicker({
                                                    format: 'YYYY/MM/DD',
                                                    icons: {
                                                        time: "fa fa-clock-o",
                                                        date: "fa fa-calendar",
                                                        up: "fa fa-chevron-up",
                                                        down: "fa fa-chevron-down",
                                                        previous: 'fa fa-chevron-left',
                                                        next: 'fa fa-chevron-right',
                                                        today: 'fa fa-screenshot',
                                                        clear: 'fa fa-trash',
                                                        close: 'fa fa-remove'
                                                    }
                                                });

                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Giá sĩ:</label>
                                            <div class="col-sm-10">
                                                <input id="giasi" type="number" name="giasi" placeholder="Giá bán sĩ . . ." class="form-control" value="{{ $info->giasi }}">
                                                <p class="text-success giasi"></p>
                                                <p class="text-danger">{{$errors->first('giasi')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Giá lẻ:</label>
                                            <div class="col-sm-10">
                                                <input id="giale" type="mumber" name="giale" placeholder="Giá bán lẻ . . ." class="form-control" value="{{ $info->giale }}">
                                                <p class="text-success giale"></p>
                                                <p class="text-danger">{{$errors->first('giale')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Số kệ:</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="soke" placeholder="Số kệ . . ." class="form-control" value="{{ $info->soke }}">
                                                <p class="text-danger">{{$errors->first('soke')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div style="text-align:right;">
                                        <button class="btn btn-success" type="submit">Sửa</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script>
        $(document).ready(function () {
            change_money('giasi','giasi')
            change_money('giale','giale')
        });
        $('#giasi').keyup(function (e) { 
            change_money('giasi','giasi')
        });
        $('#giale').keyup(function (e) { 
            change_money('giale','giale')
        });
        function addCommas(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
            function change_money(cl,cll){
                var t=$('#'+cll).val().replace(/[,]/g,'');
               
               var k=addCommas(t)
             
              $('.'+cl).text(addCommas(k)+' VNĐ')
            }
    </script>
@endsection
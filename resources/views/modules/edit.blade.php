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
                                                <input type="number" name="giasi" placeholder="Giá bán sĩ . . ." class="form-control" value="{{ $info->giasi }}">
                                                <p class="text-danger">{{$errors->first('giasi')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Giá lẻ:</label>
                                            <div class="col-sm-10">
                                                <input type="mumber" name="giale" placeholder="Giá bán lẻ . . ." class="form-control" value="{{ $info->giale }}">
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
                                    {{-- <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Checkboxes and radios</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                        First Checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                        Second Checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="option1">
                                                        <span class="form-check-sign"></span>
                                                        Radio is off
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="option2" checked>
                                                        <span class="form-check-sign"></span>
                                                        Radio is on
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label">Inline checkboxes</label>
                                            <div class="col-sm-10">
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option1">
                                                        <span class="form-check-sign"></span>
                                                        a
                                                    </label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option2">
                                                        <span class="form-check-sign"></span>
                                                        b
                                                    </label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="option3">
                                                        <span class="form-check-sign"></span>
                                                        c
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div style="text-align:right;">
                                        <button class="btn btn-success" type="submit">Thêm</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
@extends('welcome')
@section('content1')
<div class="content">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">
                        <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                                <th>STT</th>
                                                <th>Tên thuốc</th>
                                                <th>Số lượng</th>
                                                <th>Ngày hết hạn</th>
                                                <th>Giá sĩ</th>
                                                <th>Giá lẻ</th>
                                                <th>Số kệ</th>
                                                <th>Ngày nhập hàng</th>
                                                <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên thuốc</th>
                                            <th>Số lượng</th>
                                            <th>Ngày hết hạn</th>
                                            <th>Giá sĩ</th>
                                            <th>Giá lẻ</th>
                                            <th>Số kệ</th>
                                            <th>Ngày nhập hàng</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            
                                            $timeht=strtotime("+10 Days");
                                            $timess=date('Y-m-d',$timeht);
                                        ?>
                                        @foreach($data as $key=>$val)
                                        <tr @if( $timess == $val->ngayhethan || $timess > $val->ngayhethan ) class="text-danger"  @endif>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $val->tenthuoc }}</td>
                                            <td>{{ $val->soluong }}</td>
                                            <td>
                                                @if( $timess > $val->ngayhethan )
                                                    Thuốc đã hết hạn
                                                @else
                                                    {{ $val->ngayhethan }}
                                                @endif
                                            </td>
                                            <td>{{ $val->giasi }}</td>
                                            <td>{{ $val->giale }}</td>
                                            <td>{{ $val->soke }}</td>
                                            <td>{{ substr($val->created_at,0,strpos($val->created_at,' '))}}</td>
                                            <td class="text-right">
                                                <a href="{{ route('gupdate',$val->id) }}" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                <button  class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script>
    $('.remove').click(function () { 
                var t=$(this).closest('tr').find('input:checkbox').val()
                bootbox.confirm({
                    message:"Are you sure?",
                    size:"small",
                    callback:function(result)
                    {
                        if(result)
                        {
                            $.ajax({
                                type: "post",
                                url: "{{route('remove')}}",
                                data: {
                                    "_token":"{{csrf_token()}}",
                                    "id":t
                                },
                                success: function (response) {
                                                if(response=='ok')
                                                    location.reload()
                                }
                            })
                    }
                    }
                })
                })
          
</script>
@endsection
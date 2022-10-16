@extends('layouts/master')
@section('title')
    <p>Danh sách chấm công</p>
@endsection
@section('role')
    Danh sách
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-5 ">
                            <thead>
                                <form action="{{ route('add.timekeeping') }}" method="post">
                                    @csrf
                                    <input type="month" name="month" value="<?php echo date('F Y'); ?>" id="month" class="form-control col-3 mb-2">

                                    <tr>
                                        <th>Tên nhân viên</th>
                                        <th>Tổng số ngày làm</th>
                                        <th>Hệ số lương</th>
                                        <th>Tổng tiền</th>
                                    </tr>
                            </thead>
                            <tbody class="phuong">
                                @foreach ($data as $value)
                                    <tr >
                                        <td>{{ $value['name'] }}</td>
                                        <td>{{ $value['coutn'] }}</td>
                                        <td>{{ number_format($value['salary']) }}</td>
                                        <td>{{ number_format($value['coutn'] * $value['salary']) }}</td>
                                    </tr>
                                @endforeach

                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ eCommerce statistic -->

    <!-- Statistics -->

    <!--/ Statistics -->
@endsection
@push('scripts')
    <script>
        $("#month").change(function() {
            var idQuan = $("#month").val();
            $.ajax({
                url: "{{ route('search.statistical') }}",
                method: "post",
                data: {
                    idQuan: idQuan
                },
                success: function(data) {
                    $(".phuong").html(data)
                }
            })
        });
    </script>
@endpush

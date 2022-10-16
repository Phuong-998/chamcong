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
                                    <input type="submit" class="btn btn-primary mb-1" value="Save">
                                    <tr>
                                        <th>
                                            <input class="form-check-input" type="checkbox"id="select-all" value="">
                                            <label class="form-check-label" for="select-all">
                                                Chọn tất cả
                                            </label>
                                        </th>
                                        <th>
                                            Ngày làm
                                        </th>
                                        <th>Tên nhân viên</th>


                                    </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $value)
                                    <tr>
                                        <td>
                                            <input class="form-check-input" type="checkbox" name="check[]"
                                                value="{{ $value->id }}" id="{{ $value->id }}">
                                            <label class="form-check-label" for="{{ $value->id }}">
                                                Chọn
                                            </label>
                                        </td>
                                        <td>
                                            <input type="date" name="date[]" id="" class="form-control" value='<?php echo date('Y-m-d');?>'>
                                        </td>
                                        <td>{{ $value->name }}</td>

                                    </tr>
                                @endforeach
                                {{-- <input type="checkbox" name="select-all" id="select-all" /> --}}
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
        $('#select-all').click(function(event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
@endpush

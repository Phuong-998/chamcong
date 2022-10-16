@extends('layouts/master')
@section('title')
    <p>Danh sách nhân viên</p>
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
                    
					<a class="card-text" style="font-size: 20px" href=" {{ route('add.employee') }}">Thêm mới nhân viên</a>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered mb-0">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên nhân viên</th>
								<th>Chức vụ</th>
								<th>Lương</th>
                                <th colspan="2"></th>
							</tr>
						</thead>
						<tbody>
                            @php
                                $stt = 1;
                            @endphp
                            @foreach ($data as $value )
                            <tr>
								<th scope="row">{{ $stt++ }}</th>
								<td>{{ $value->name }}</td>
								<td>{{ $value->role }}</td>
								<td>{{ number_format($value->salary) }}</td>
                                <td><a href="{{ route('edit.employee',['id' =>$value->id]) }}"><button class="btn btn-info"><i class="la la-pencil"></i></button></a></td>
                                <td><a href="{{ route('delete.employee',['id' => $value->id]) }}" onclick="return confirm('Bạn có chắc muốn xóa không?');"><button class="btn btn-danger"><i class="la la-trash"></i></button></a></td>
							</tr>
                            @endforeach

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

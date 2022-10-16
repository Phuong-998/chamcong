@extends('layouts/master')
@section('title')
    <p>Thêm nhân viên</p>
@endsection
@section('role')
    Add
@endsection
@section('content')
<div class="col-8 offset-2">
    <div class="card">
<div class="card-content collapse show p-3">
    
    <form action="{{ route('handl.add.employee') }}" method="post" class="form-group">
        @csrf
        <div class="form-group">
            <label for="">Tên nhân viên</label>
            <input type="text" name="name" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Chức vụ</label>
            <input type="text" name="role" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Lương</label>
            <input type="text" name="salary" class="form-control " id="salary">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" id="">
        </div>
    </form>
</div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$("#salary").keyup(function(){
    $('#salary').autoNumeric('init', { allowDecimalPadding : false });
});
</script>
@endpush
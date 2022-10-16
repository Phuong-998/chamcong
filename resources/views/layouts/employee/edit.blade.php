@extends('layouts/master')
@section('title')
    <p>Sủa thông tin</p>
@endsection
@section('role')
    Edit
@endsection
@section('content')
<div class="col-8 offset-2">
    <div class="card">
<div class="card-content collapse show p-3">
    
    <form action="{{ route('handl.edit.employee') }}" method="post" class="form-group">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="form-group">
            <label for="">Tên nhân viên</label>
            <input type="text" name="name" class="form-control" id="" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="">Chức vụ</label>
            <input type="text" name="role" class="form-control" id="" value="{{ $data->role }}">
        </div>
        <div class="form-group">
            <label for="">Lương</label>
            <input type="text" name="salary" class="form-control salary" id="" value=" <?php echo number_format($data->salary) ?> ">
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
$(".salary").keyup(function(){
    $('.salary').autoNumeric('init', { allowDecimalPadding : false });
});
</script>
@endpush
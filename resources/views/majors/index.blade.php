@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  เมนูแสดงผลคณะ [ทั้งหมด {{ $count }} คณะ]
                  <table class ="table table-striped">
                      <tr>
                          <th>ลำดับ</th>
                          <th>รหัสวิชา</th>
                          <th>ชื่อวิชา</th>
                          <th>รหัสคณะ</th>
                      </tr>
                      @foreach ($majors as $majors)
                      <tr>
                      <td>{{ $majors->id}}</td>
                      <td>{{ $majors->major_id}}</td>
                      <td>{{ $majors->major_name}}</td>
                      <td>{{ $majors->fac_id}}</td>
                      </tr>
                      @endforeach
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

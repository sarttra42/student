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
                          <th>รหัสคณะ</th>
                          <th>ชื่อคณะ</th>
                      </tr>
                      @foreach ($student as $students)
                      <tr>
                      <td>{{ $facultys->id}}</td>
                      <td>{{ $facultys->fac_id}}</td>
                      <td>{{ $facultys->fac_name}}</td>
                      </tr>
                      @endforeach
                  </table>
                  {!! $facultys->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

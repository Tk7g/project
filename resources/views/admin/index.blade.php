@extends('admin.admin')

@section('main-content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Хэрэглэгчдийн жагсаалт</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Овог, Нэр</th>
                  <th>И-мэйл хаяг</th>
                  <th>Албан тушаал</th>                  
                  <th>Төлөв</th>
                </tr>
                </thead>
                <tbody>
                <tr>@foreach($users as $user)
                        <div>
                            <td>{{ $user->fname }}.{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->position }}</td>
                            <td style="width: 130px">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info">
                                        @can ('admin-access')<a href="{{ url('users/edit', $user->id) }}">Засах</a>@endcan
                                    </button>
                                    <button type="button" class="btn btn-danger">Устгах</button>
                                </div>
                            </td>
                        </div>
                @endforeach
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                </tr>
                               
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>                  
                </tr>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection

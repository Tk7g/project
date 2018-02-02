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
                  <th>Sap id</th>
                  <th>Албан тушаал</th>                  
                  <th>Төлөв</th>
                </tr>
                </thead>
                <tbody>@foreach($users as $user)
                <tr>
                        <div>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->sap_id }}</td>
                            <td>{{ $user->position }}</td>
                            <td style="width: 150px">
                                <div class="btn-group">
                                  @can ('admin-access')
                                    <button type="button" class="btn btn-info">
                                        <a href="{{ route('users.update', $user->id) }}">Засах</a>
                                    </button>
                                  @endcan
                                    <button type="button" class="btn btn-danger">Устгах</button>
                                </div>
                            </td>
                        </div>
                
                </tr>
                @endforeach
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

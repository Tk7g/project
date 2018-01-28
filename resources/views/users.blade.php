@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Бүх хэрэглэгчид</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($users as $user)
                        <div>
                            {{ $user->email }}
                            @can ('admin-access')
                            <a href="{{ url('users/edit', $user->id) }}"> | Засах</a>
                            @endcan
                        </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

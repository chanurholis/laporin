@extends('layouts.admin.main')

@section('title', 'User')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Pengguna <span>({{ $users->count() }})</span></h4>
        <div class="card-header-action">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Tambah <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <th scope="col">Nama</th>
                    <th scope="col">Surel</th>
                    <th scope="col"></th>
                    @foreach ($users as $user)      
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td class="text-right">
                            <form action="{{ '/admin/users/' . $user['id'] }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger @if($user['id'] == Auth::user()->id) d-none @endif"><i class="fa fa-trash"></i></button>
                                <a href="{{ '/admin/users/' . $user['id'] . '/edit' }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ '/admin/users/' . $user['id'] }}" class="btn btn-info"><i class="fa fa-search"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-right">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                {{-- {{ $users->links() }} --}}
            </ul>
        </nav>
    </div>
</div>
@endsection
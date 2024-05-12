@extends('app')

@section('content')
    <!-- 00. Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid col-md-7">
            <div class="navbar-brand">Simple To Do List</div>
            <!--
                                                                                                                    <div class="navbar-collapse justify-content-end" id="navbarNav">
                                                                                                                        <ul class="navbar-nav">
                                                                                                                            <li class="nav-item dropdown">
                                                                                                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                                    Akun Saya
                                                                                                                                </a>
                                                                                                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                                                                                                                    <li><a class="dropdown-item" href="#">Update Data</a></li>
                                                                                                                                </ul>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                -->
        </div>
    </nav>

    <div class="container mt-4">
        <!-- 01. Content-->
        <h1 class="text-center mb-4">To Do List</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- 02. Form input data -->
                        <form id="todo-form" action="{{ route('todo.post') }}" method="post">
                            <div class="input-group mb-3">
                                @csrf
                                <input type="text" class="form-control" name="task" id="todo-input"
                                    placeholder="Tambah task baru" required value="{{ old('task') }}">
                                <button class="btn btn-primary" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- 03. Searching -->
                        <form id="todo-form" action="" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search" value=""
                                    placeholder="masukkan kata kunci">
                                <button class="btn btn-secondary" type="submit">
                                    Cari
                                </button>
                            </div>
                        </form>

                        <ul class="list-group mb-4" id="todo-list">
                            @foreach ($tasks as $task)
                                <!-- 04. Display Data -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {!! $task->is_done == '1' ? '<del>' : '' !!}
                                    {{ $task->task }}
                                    {!! $task->is_done == '1' ? '</del>' : '' !!}
                                    <input type="text" class="form-control edit-input" style="display: none;"
                                        value="{{ $task->task }}">
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-sm delete-btn">✕</button>
                                        <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false">✎</button>
                                    </div>
                                </li>
                                <!-- 05. Update Data -->
                                <li class="list-group-item collapse" id="collapse-{{ $loop->index }}">
                                    <form action="{{ route('todo.update', ['id' => $task->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="task"
                                                    value="{{ $task->task }}">
                                                <button class="btn btn-outline-primary" type="submit">Update</button>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="radio px-2">
                                                <label>
                                                    <input type="radio" value="1" name="is_done"
                                                        {{ $task->is_done == '1' ? 'checked' : '' }}> Selesai
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="is_done"
                                                        {{ $task->is_done == '0' ? 'checked' : '' }}> Belum
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
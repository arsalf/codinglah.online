@extends('layouts.app')

@section('content')
    <style>
        button.btn-updated {
            display: none;
        }

        button:disabled {
            cursor: not-allowed;
            pointer-events: all !important;
        }

        button.btn.disabled {
            pointer-events: none;
            cursor: no-drop !important;
        }

    </style>
    <div class="container">
        <div class="d-flex bd-highlight mb-4">
            <div class="p-2 w-100 bd-highlight">
                <h2>Laravel AJAX Example</h2>
            </div>
        </div>

        <div>
            <button class="btn btn-success btn-crud" id="btn-add">
                Add Todo
            </button>
            <form>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="todos-list" name="todos-list">
                            {{-- <form id="myForm" name="myForm" class="form-horizontal" novalidate=""> --}}
                            @foreach ($todo as $data)
                                <tr id="{{ $data->id }}">
                                    <td>{{ $data->id }}</td>
                                    <td class="title" id="title{{ $data->id }}">{{ $data->title }}</td>
                                    <td class="desc" id="desc{{ $data->id }}">{{ $data->description }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-edit" value="{{ $data->id }}">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-success btn-updated"
                                            value="{{ $data->id }}">
                                            Update
                                        </button>
                                        <button type="button" class="btn btn-success btn-delete"
                                            value="{{ $data->id }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </form>
            <!-- Modal Create -->
            <div class="modal fade" id="formModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="formModalLabel">Create Todo</h4>
                        </div>
                        <div class="modal-body">

                            <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter title" value="">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Enter Description" value="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div id="err"></div>
                            <button type="button" class="btn btn-primary" id="btn-create" value="add">Save changes</button>
                            <input type="hidden" id="todo_id" name="todo_id" value="0">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/todo.js') }}" defer></script>
@endsection

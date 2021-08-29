@extends('layouts.app')
@section('caption_navbar')
    Page Manager : Home Karya
@endsection
@section('content_admin')
    <style>
        .table thead th {
            border-bottom: 0;
        }

        .btn-update {
            display: none;
        }

        .btn-cancel {
            display: none;
        }

        div.alert.alert-warning {
            padding: 10px;
            margin: 0;
        }

        .dropdown-menu {
            max-height: 280px;
            overflow-y: auto;
        }

    </style>

    <button id="btn-add" class="btn btn-success mt-3 mb-2">Add Artikel</button>
    <form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark table-bordered border-dark text-center">
                    <tr>
                        <th>id_card</th>
                        <th>image</th>
                        <th>category</th>
                        <th>bahasa</th>
                        <th>title</th>
                        <th>description</th>
                        <th>link</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="list_bahasa">
                    <tr>
                        <td>1</td>
                        <td>/upload/data.png</td>
                        <td>Machine Learning</td>
                        <td>JavaScript</td>
                        <td>Calculator</td>
                        <td>Alat penghitung angka</td>
                        <td>/karya/alat/calculator</td>
                        <td><button>edit</button></td>
                    </tr>
                    {{-- @foreach ($collectionLinkBahasa as $item)
                        <tr id="{{$item->id_card}}">
                            <td style="width: 5%">{{ $item->id_card}}</td>
                            <td id="category_{{ $item->id_card }}">{{ $item->category }}</td>
                            <td id="title_{{ $item->id_card }}">{{ $item->title}}</td>
                            <td id="description_{{ $item->id_card }}">{{$item->description}}</td>
                            <td id="link_{{ $item->id_card }}">{{$item->link}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-edit me-2"
                                    value="{{ $item->id_link }}">edit</button>
                                <button type="button" class="btn btn-warning btn-update me-2"
                                    value="{{ $item->id_link }}">update</button>
                                <button type="button" class="btn btn-danger btn-delete"
                                    value="{{ $item->id_link }}">delete</button>
                                <button type="button" class="btn btn-primary btn-cancel"
                                    value="{{ $item->id_link }}">cancel</button>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </form>
    <div class="modal fade" id="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="formModalLabel">Add Tutorial</h4>
                </div>
                <div class="modal-body">
                    <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
                        <div class="form-group">
                            <label>Link/Path (*)</label>
                            <input type="text" class="form-control" id="link_desc" name="link_desc"
                                placeholder="Masukan Link/Path Direction" value="">
                        </div>
                        <span>(*) Wajib Diisi<span>
                    </form>
                </div>
                <div class="modal-footer">
                    <div id="err"></div>
                    <button type="button" class="btn btn-primary" id="btn-create" value="add">Add</button>
                    <input type="hidden" id="todo_id" name="todo_id" value="0">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="{{ asset('js/crudajaxlinkhkarya.js') }}"></script>
@endsection

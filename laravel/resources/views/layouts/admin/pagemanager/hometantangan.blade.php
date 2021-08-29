@extends('layouts.app')
@section('caption_navbar')
    Page Manager : Home Tantangan
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
    <div id="select-bahasa">
        <h4>-- Select Bahasa --</h4>
        <select id="form_select_bhs" class="form-select" aria-label="Default select example">
            @foreach ($collectionBahasa as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <button id="btn-add" class="btn btn-success mt-3 mb-2">Add Tantangan</button>
    <form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark table-bordered border-dark text-center">
                    <tr>
                        <th rowspan="2">Link Id</th>
                        <th colspan="3" style="width: 70%!important">Link/Path Redirect</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Basic</th>
                        <th>Intermediate</th>
                        <th>Pro</th>
                    </tr>
                </thead>
                <tbody id="list_bahasa">
                    @foreach ($collectionLinkBahasa as $item)
                        <tr id="{{ $item->id_link }}" class="{{ $item->id_bahasa }}">
                            <td style="width: 5%">{{ $item->id_link }}</td>
                            <td id="basic_{{ $item->id_link }}">{{ $item->basic }}</td>
                            <td id="inter_{{ $item->id_link }}">{{ $item->inter }}</td>
                            <td id="pro_{{ $item->id_link }}">{{ $item->pro }}</td>
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
                    @endforeach
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
                            <label>Link/Path Basic (*)</label>
                            <input type="text" class="form-control" id="basic" name="basic" placeholder="Masukan Link Basic"
                                value="">
                            <label>Link/Path Intermediate (*)</label>
                            <input type="text" class="form-control" id="inter" name="inter"
                                placeholder="Masukan Link Intermediate" value="">
                            <label>Link/Path Pro (*)</label>
                            <input type="text" class="form-control" id="pro" name="pro"
                                placeholder="Masukan Link Pro" value="">
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
    <script src="{{ asset('js/crudajaxlinkhtantangan.js') }}"></script>
@endsection

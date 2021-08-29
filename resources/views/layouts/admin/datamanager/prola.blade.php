@extends('layouts.app')
@section('caption_navbar')
    Data Manager : Programming Languange
@endsection
@section('content_admin')
<style>
    .btn-update{
        display: none;
    }
    .btn-cancel{
        display: none;
    }
</style>
    <button id="btn-add" class="btn btn-success mb-3">Add Bahasa</button>
<form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Bahasa</th>
                    <th scope="col">Image Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="list_bahasa">
                @foreach ($collectionBahasa as $item)
                    <tr id="{{$item->id}}">
                        <td style="width: 5%">{{$item->id}}</td>
                        <td id="name_{{$item->id}}"style="width: 10%">{{$item->name}}</td>
                        <td id="image_{{$item->id}}"style="width: 50%">{{$item->image}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-edit me-2" value="{{$item->id}}">edit</button>
                            <button type="button" class="btn btn-warning btn-update me-2" value="{{$item->id}}">update</button>
                            <button type="button" class="btn btn-danger btn-delete" value="{{$item->id}}">delete</button>
                            <button type="button" class="btn btn-primary btn-cancel" value="{{$item->id}}">cancel</button>
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
                    <h4 class="modal-title" id="formModalLabel">Add Data Bahasa Pemrograman</h4>
                </div>
                <div class="modal-body">

                    <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
                        <div class="form-group">
                            <label>Nama (*)</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukan Nama Bahasa Pemrograman" value="">
                        </div>

                        <div class="form-group">
                            <label>Image (*)</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Masukan Link Image" value="">
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
    <script src = "{{asset('js/crudajaxdatabahasa.js')}}"></script>
@endsection
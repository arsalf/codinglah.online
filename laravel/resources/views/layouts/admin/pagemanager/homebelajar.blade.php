@extends('layouts.app')
@section('caption_navbar')
    Page Manager : Home Tutorial
@endsection
@section('content_admin')
<style>
    .btn-update{
        display: none;
    }
    .btn-cancel{
        display: none;
    }
    div.alert.alert-warning{
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
            <option value="{{$item->id}}">{{$item->name}}</option>  
        @endforeach
    </select>
</div>
<button id="btn-add" class="btn btn-success mt-3 mb-2">Add Belajar</button>
<form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Link Id</th>
                    <th scope="col">Link/Path Direction</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="list_bahasa">          
                @foreach ($collectionLinkBahasa as $item)
                    <tr id="{{$item->id_link}}" class="{{$item->id_bahasa}}">
                        <td style="width: 5%">{{$item->id_link}}</td>
                        <td id="link_{{$item->id_link}}" style="width: 50%">{{$item->link}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-edit me-2" value="{{$item->id_link}}">edit</button>
                            <button type="button" class="btn btn-warning btn-update me-2" value="{{$item->id_link}}">update</button>
                            <button type="button" class="btn btn-danger btn-delete" value="{{$item->id_link}}">delete</button>
                            <button type="button" class="btn btn-primary btn-cancel" value="{{$item->id_link}}">cancel</button>
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
    <script src="{{asset('js/crudajaxlinkhbelajar.js')}}"></script>
@endsection

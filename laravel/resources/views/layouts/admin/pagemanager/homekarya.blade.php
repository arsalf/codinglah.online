@extends('layouts.app')
@section('caption_navbar')
    Page Manager : Home Karya dan Artikel
@endsection
@section('custom_style')
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
    .modal .modal-dialog{
        margin-top: 3px!important;
        margin-bottom: 3px!important;
    }

</style>    
@endsection
@section('content_admin')
    <button id="btn-add" class="btn btn-success mt-3 mb-2">Add Karya/Artikel</button>
    <form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark table-bordered border-dark">
                    <tr>
                        <th>id_card</th>
                        <th>image</th>
                        <th>category</th>
                        <th>rating</th>
                        <th>title</th>
                        <th>description</th>
                        <th>link</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody id="list_karya">
                    @foreach ($collectionKarya as $item)
                        <tr id="{{$item->id_card}}">
                            <td style="width: 5%">{{ $item->id_card}}</td>
                            <td id="image_{{ $item->id_card }}">{{ $item->image }}</td>
                            <td id="category_{{ $item->id_card }}">{{ $item->category }}</td>
                            <td id="rating_{{ $item->id_card }}">{{ $item->rating }}</td>
                            <td id="title_{{ $item->id_card }}">{{ $item->title}}</td>
                            <td id="description_{{ $item->id_card }}">{{$item->description}}</td>
                            <td id="link_{{ $item->id_card }}">{{$item->link}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-edit me-2"
                                    value="{{ $item->id_card}}">edit</button>
                                <button type="button" class="btn btn-warning btn-update me-2"
                                    value="{{ $item->id_card}}">update</button>
                                <button type="button" class="btn btn-danger btn-delete"
                                    value="{{ $item->id_card}}">delete</button>
                                <button type="button" class="btn btn-primary btn-cancel"
                                    value="{{ $item->id_card}}">cancel</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <div class="modal fade" id="formModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="formModalLabel">Add Karya/Artikel</h4>
                </div>
                <div class="modal-body">
                    <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
                        <div class="form-group">
                            @php
                                $dataInput = array("image", "category", "rating", "title", "description", "link");
                                foreach ($dataInput as $key) {
                                    echo "
                                        <label>$key</label>
                                        <input type='text' class='form-control' id='$key' name='$key'   placeholder='Masukan link/path $key' value='''>
                                    ";
                                }
                            @endphp
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

<div id="mySidebar" class="sidebar">
    <div id="button-sidebar" class="d-flex justify-content-center">
        <button id="toggler-sidebar" class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#sidebarScroll" aria-controls="sidebarScroll" aria-expanded="false"
            aria-label="Toggle navigation" onclick="addBorder(this.id)">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="collapse container mb-3" id="sidebarScroll">
        <h5><b>Basic</b></h5>
        <a class="{{ Request::is('belajar/c/intro') ? 'active' : ''}}" href="{{url('/belajar/c/intro')}}">Pengenalan</a>
        <a class="{{ Request::is('belajar/c/syntax') ? 'active' : ''}}" href="{{url('/belajar/c/syntax')}}">Syntax</a>
        <a class="{{ Request::is('belajar/c/output') ? 'active' : ''}}" href="{{url('/belajar/c/output')}}">Output</a>
        <a class="{{ Request::is('belajar/c/variabel') ? 'active' : ''}}" href="{{url('/belajar/c/variabel')}}">Variabel</a>
        <a href="{{url('belajar/c/tipe_data')}}">Tipe Data</a>
        <a href="{{url('coming_soon')}}">Input</a>
        <a href="{{url('coming_soon')}}">Operator</a>
        <a href="{{url('coming_soon')}}">Condition</a>
        <a href="{{url('coming_soon')}}">Loop</a>
        <h5><b>Intermediate</b></h5>
        <a href="{{url('coming_soon')}}">Tipe Data Abstract</a>
        <a href="{{url('coming_soon')}}">Modular Programming</a>
        <a href="{{url('coming_soon')}}">Fungsi</a>
        <a href="{{url('coming_soon')}}">Prosedur</a>
        <h5><b>Professional</b></h5>
        <a href="{{url('coming_soon')}}">Write File</a>
        <a href="{{url('coming_soon')}}">Read File</a>
        <a href="{{url('coming_soon')}}">Sorting File</a>
    </div>
</div>
<script src="{{ asset('js/sidebar.js') }}"></script>

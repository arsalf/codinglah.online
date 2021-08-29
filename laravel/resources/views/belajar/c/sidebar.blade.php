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
        <a class="active" href="#">Pengenalan</a>
        <a href="#">Syntax</a>
        <a href="#">Output</a>
        <a href="#">Input</a>
        <a href="#">Tipe Data</a>
        <a href="#">Operator</a>
        <a href="#">Condition</a>
        <a href="#">Loop</a>
        <h5><b>Intermediate</b></h5>
        <a href="#">Tipe Data Abstract</a>
        <a href="#">Modular Programming</a>
        <a href="#">Fungsi</a>
        <a href="#">Prosedur</a>
        <h5><b>Professional</b></h5>
        <a href="#">Write File</a>
        <a href="#">Read File</a>
        <a href="#">Sorting File</a>
    </div>
</div>
<script src="{{ asset('js/sidebar.js') }}"></script>

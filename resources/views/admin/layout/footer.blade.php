<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> Lukasov pokus
    </div>
</footer>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });
    });
</script>

@section("footerSection")
@show


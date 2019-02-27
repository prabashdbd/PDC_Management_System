@if(session('success'))
    <div class="alert alert-success alert-dismissable fade in" id="successMessage"> 
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong></strong> {{session('success')}}
    </div>
@endif

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
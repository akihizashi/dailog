<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dockmodal.js"></script>
<script type="text/javascript">
    $('.nav .nav-link').click(function(){
        $('.nav .nav-link').removeClass('active');
        $(this).addClass('active');
    })
</script>
<script>
$("#myModal").draggable({
handle:".modal-header"
});
</script>
</html>
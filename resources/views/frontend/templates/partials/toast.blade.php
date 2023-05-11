@if(session('alert'))
<script>
    var toast = '{{ session("alert") }}'
    M.toast({
        html: toast,
        classes: 'red'
    })
</script>
@endif
@if(session('success'))
<script>
    var toast = '{{ session("success") }}'
    M.toast({
        html: toast,
        classes: 'teal'
    })
</script>
@endif
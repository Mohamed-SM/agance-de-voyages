@if(isset($errors))
@if(count($errors) > 0)
<script type="text/javascript">
    @foreach ($errors->all() as $error)
    $.notify({
        icon: 'fa  fa-exclamation-triangle',
        message: "{{ $error }}"
    },{
        type: 'danger',
        offset: {
            x: 15,
            y: 70
        }
    });
    @endforeach
</script>
@endif
@endif

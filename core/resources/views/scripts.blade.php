<script>
    var host = "{{ config('app.publisher_url') }}";
    var port = "{{ config('app.broadcast_port') }}";
    var dataTable = null;

    function can(permission){
        let response = false;

        if(permissions.includes(permission)){
            response = true;
        }

        return response;
    }

    function role(role){
        let response = false;

        if(roles.includes(role)){
            response = true;
        }

        return response;
    }
    
    $(".kt-portlet__head-toolbar").remove();
</script>
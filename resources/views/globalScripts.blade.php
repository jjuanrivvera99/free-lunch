<script>
    var host = "{{ config('app.publisher_url') }}";
    var port = "{{ config('app.broadcast_port') }}";
    var sessionLifeTime = "{{config('session.lifetime')}}";
    var sessionLifeTimeSeconds = sessionLifeTime * 60 * 1000;
    var dataTable = null;

    function can(permission){
        let response = false;

        if(permissions.includes(permission) || role('admin')){
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

    const ajax = {
        post : (url,data,error = null, success = null) => {
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success:success,
                error: error
            });
        }
    };
</script>

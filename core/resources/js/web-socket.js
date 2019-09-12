import io from 'socket.io-client';

var sock = io(host+':'+port);

console.log(host+':'+port);

sock.on('test-channel-one:App\\Events\\NotifyEvent', function (response) {
    if(response.data){
        toastr[response.type](response.data);
    }
    
    dataTable.ajax.reload(null, false);
});

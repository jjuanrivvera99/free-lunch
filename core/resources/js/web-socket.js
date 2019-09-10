import io from 'socket.io-client';

console.log(host+':'+port);

var sock = io(host+':'+port);

sock.on('test-channel-one:App\\Events\\NotifyEvent', function (response) {
    toastr[response.type](response.data);
});

import io from 'socket.io-client';

var sock = io("http://172.16.101.35:8081");

$(document).ready(function(){

    $(".kt-notification").html('');
});

let notificacion = (data) => {

    return `<a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-line-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        ${data.actionData[0]}
                    </div>
                    <div class="kt-notification__item-time">
                        1 second ago
                    </div>
                </div>
            </a>`;

}

sock.on('test-channel-one:App\\Events\\TestEvent', function (data) {

    //data.actionId and data.actionData hold the data that was broadcast
    //process the data, add needed functionality here

    $(".kt-notification").append(notificacion(data));
    console.log(data);
});

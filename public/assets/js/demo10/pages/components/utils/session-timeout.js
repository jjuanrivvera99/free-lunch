"use strict";

var KTSessionTimeoutDemo = function () {

    var initDemo = function () {
        $.sessionTimeout({
            title: 'Session Timeout Notification',
            message: 'Your session is about to expire.',
            keepAliveUrl: '/keep-alive',
            redirUrl: '/',
            logoutUrl: '/logout',
            warnAfter: sessionLifeTimeSeconds - 30000, //warn afters session lifetime subtract 60 seconds
            redirAfter: sessionLifeTimeSeconds - 10000, //redirect after 10 secons,
            ignoreUserActivity: true,
            countdownMessage: 'Redirecting in {timer} seconds.',
            countdownBar: true
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            initDemo();
        }
    };

}();

jQuery(document).ready(function() {
    KTSessionTimeoutDemo.init();
});

import axios from 'axios';

function checkAuth(){
        
        axios.post(`${window.authenticationLog.authpingEndpoint}`, {
            pinguser: 1,
        })
            .then(function (response) {
                if (parseInt(response.data.auth) === 0){
                    // show modal
                    document.getElementById("modal-authenticated").style.visibility = "visible";
                }
                else{
                    // user session available, hide the modal
                    document.getElementById("modal-authenticated").style.visibility = "hidden";
                }
            })
            .catch(function (error) {
                console.log(error);
            });
}

(function(){
    // check every minute if not logged out already
    setInterval(checkAuth, parseInt(window.authenticationLog.requestGap) * 1000);

    if (parseInt(window.authenticationLog.usingBroadcasting) === 1){
        // listen for laravel echo
        Echo.private(`user.sessiotrack.${ window.authenticationLog.userId }`)
            .listen('.session.active', (e) => {
                // user auth session resumed
                // close the notification modal
                document.getElementById("modal-authenticated").style.visibility = "hidden";
            });
    }
})();
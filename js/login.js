$(document).ready(function(){
    function showLogin(){
        $('#login-container').show();
        $('html body').css('overflow','hidden');
    }
    $('#loginEvent').click(function(){
        showLogin();
    })
    $('#signin-login').click(function(){
        showLogin();
    })

    function closeLogin(){
        $('#login-container').hide();
    }
    // setTimeout(loginModal,3000);
    $('#close-login').click(function(){
        closeLogin();
    })
    $('#signup-login').click(function(){
        closeLogin();
    })
});
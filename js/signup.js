$(document).ready(function(){ //this is actually signin
    function showSignup(){
        $('#signup-container').show();
        $('html body').css('overflow','hidden');
    }
    $('#signup-login').click(function(){
        showSignup();
    })

    function closeLogin(){
        $('#signup-container').hide();
    }
    // setTimeout(loginModal,3000);
    $('#close-signup').click(function(){
        closeLogin();
    })
    $('#signin-login').click(function(){
        closeLogin();
    })
});
$(".navbar-toggler").click(function() {
    if ($("#menu").hasClass('fa-bars')) {
        $("#menu").removeClass("fa-bars")
        $("#menu").addClass("fa-times")
    } else {
        $("#menu").removeClass("fa-times")
        $("#menu").addClass("fa-bars")
    }
});

$(function() {
    var angulo = 0;
    setInterval(function() {
        angulo += 3;
        $("#aroG").rotate(angulo);
    }, 30);
});

$(function() {
    var angulo = 0;
    setInterval(function() {
        angulo += 3;
        $("#aroB").rotate(angulo);
    }, 25);
});

$(function() {
    var angulo = 0;
    setInterval(function() {
        angulo += 3;
        $("#arosmobilG").rotate(angulo);
    }, 30);
});

$(function() {
    var angulo = 0;
    setInterval(function() {
        angulo += 3;
        $("#arosmobilB").rotate(angulo);
    }, 25);
});

/* function myFunction(smallImg) {
    var fullImg = document.getElementById("imageBox");
    fullImg.src = smallImg.src;
} */

$('#img-mini img').click(function() {
    var changeSrc = $(this).attr('src');
    $('#imageBox').attr('src', changeSrc);
});

$('#phone').click(function() {
    let number1 = 'https://api.whatsapp.com/send?phone=525526506601';
    let number2 = 'https://api.whatsapp.com/send?phone=5215617616061';
    let mensaje = '&text=Hola quisiera.'

    if ($('#phone').attr('href') == (number1 + mensaje)) {
        $('#phone').attr('href', number2 + mensaje)
    } else if ($('#phone').attr('href') == (number2 + mensaje)) {
        $('#phone').attr('href', number1 + mensaje)
    }

});
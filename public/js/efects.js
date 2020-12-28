
$(".navbar-toggler").click(function () {
    if ($("#menu").hasClass('fa-bars')) {
        $("#menu").removeClass("fa-bars")
        $("#menu").addClass("fa-times")
    } else {
        $("#menu").removeClass("fa-times")
        $("#menu").addClass("fa-bars")
    }
});

$(function () {
    var angulo = 0;
    setInterval(function () {
        angulo += 3;
        $("#aroG").rotate(angulo);
    }, 30);
});

$(function () {
    var angulo = 0;
    setInterval(function () {
        angulo += 3;
        $("#aroB").rotate(angulo);
    }, 25);
});

$(function () {
    var angulo = 0;
    setInterval(function () {
        angulo += 3;
        $("#arosmobilG").rotate(angulo);
    }, 30);
});

$(function () {
    var angulo = 0;
    setInterval(function () {
        angulo += 3;
        $("#arosmobilB").rotate(angulo);
    }, 25);
});

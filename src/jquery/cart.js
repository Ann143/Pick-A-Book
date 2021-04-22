$(document).ready(function() {
    let total_payment = 0;
    $(".price-tag").each(function(){
        total_payment += parseFloat($(this).text());
    })

    $(".total-payment").text("Php "+ total_payment.toFixed(2));
});
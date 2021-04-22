$(document).ready(function() {
    let total_payment = 0;
    $(".price-tag").each(function(){
        total_payment += parseFloat($(this).text());
    })
    
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }
    $(".total-payment").text("Php "+ numberWithCommas(total_payment.toFixed(2)));
});
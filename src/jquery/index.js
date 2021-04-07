$(document).ready(function () {

    $('.nav-item').on('click', function () {
           alert('hi');
        //Remove any previous active classes
        $('#link').removeClass('active');

        //Add active class to the clicked item
        $(this).addClass('active');
    })

})

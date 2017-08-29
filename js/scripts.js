$(document).ready(function () {


    $(function () {
        $.ajaxSetup({
            type: "POST",
            url: "tratar.php",
            dataType: "json",
            cache: "false",
            error: function (jqXHR, exception) {
                if (jqXHR.status === 0) {
                    console.log('No connecting.\n Verify Network.');
                } else if (jqXHR.status === 400) {
                    console.log('Bad Request. [400]');
                } else if (jqXHR.status === 404) {
                    console.log('Requested page not found. [404]');
                } else if (jqXHR.status === 500) {
                    console.log('Internal Server Error [500].');
                } else if (exception === 'parsererror') {
                    console.log(jqXHR.responseText);
                    console.log('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    console.log('Time out error.');
                } else if (exception === 'abort') {
                    console.log('Ajax request aborted.');
                } else {
                    console.log('Uncaught Error: ' + jqXHR.responseText);
                }
            }
        });
    });

    $("#contact").submit(function (event) {
        event.preventDefault();
        var dados = $(this).serialize();
        console.log(dados);
        $.ajax({
            data: dados,
            success: function (data) {
console.log(data);
                if (data.status) {
                    alert("Obrigado! A nossa resposta será tão breve quanto possível.");

                } else {
                    alert("Ooops! "+ data.status + "!");

                }
                window.location.href = "contato";
            }
        });
        return false;
    });


});


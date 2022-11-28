$(() => {


    const clearFields = () => {
        $('#user').val("");
        $('#pwd').val("");
    }

    $('#form-login').on('submit', (e) => {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: "http://localhost/aula-php/lanchonete/login.php",
            data: {
                user: $('#user').val(),
                pwd: $('#pwd').val(),
            },
            dataType: "json",
            success: function (response) {
                if (response == "Sucesso") {
                    window.location.href = "http://localhost/aula-php/lanchonete/index.php"
                    clearFields();
                } else {
                    alert(response);
                }
            },
            error: function (response) {
                console.log('error');
            }
        });
    });


})
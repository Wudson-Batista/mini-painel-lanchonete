$(() => {

    const showFields = () => {
        // $('#form-select input, #form-select .form-select ').fadeIn();

        if ($('.form-element-wrapper').hasClass('d-none')) {
            $('.form-element-wrapper').removeClass("d-none");
        }
    }

    const hideFields = () => {
        if (!$('.form-element-wrapper').hasClass('d-none')) {
            $('.form-element-wrapper:not(:first-child)').addClass("d-none");
        }
    }

    const getCliente = () => {
        const dados = $('#search_select').val();

        $.ajax({
            type: "post",
            url: "http://localhost/aula-php/lanchonete/select.php",
            data: { dados },
            async: true,
            dataType: "json",
            success: function (response) {
                if (response['erro']) {
                    alert(response['erro']);
                } else {
                    showFields();

                    var id = response['id'];

                    $('#id_select').val(response['id']);
                    $('#nome_select').val(response['nome']);
                    $('#email_select').val(response['email']);
                    $('#telefone_select').val(response['telefone']);
                    $('#numero_select').val(response['numero']);
                    $('#uf_select').val(response['uf']);
                    $('#cep_select').val(response['cep']);
                    $('#rua_select').val(response['rua']);
                    $('#bairro_select').val(response['bairro']);
                    $('#cidade_select').val(response['cidade']);
                    // console.log(response);
                }
            }
        });
    }

    const enableButtons = () => {
        const button_deletar = $('#action_deletar');
        const button_editar = $('#action_editar');
        const button_clear = $('#action_clear');

        if (button_deletar.attr("disabled")) {
            button_deletar.removeAttr("disabled");
        }
        if (button_editar.attr("disabled")) {
            button_editar.removeAttr("disabled");
        }
        if (button_clear.attr("disabled")) {
            button_clear.removeAttr("disabled");
        }
    }

    const desligarButtons = () => {
        const button_deletar = $('#action_deletar');
        const button_editar = $('#action_editar');
        const button_clear = $('#action_clear');


        button_deletar.attr("disabled", '');
        button_editar.attr("disabled", '');
        button_clear.attr("disabled", '');
    }

    const clearFields = () => {
        $('#search_select').val("");
        $('#id_select').val("");
        $('#nome_select').val("");
        $('#email_select').val("");
        $('#telefone_select').val("");
        $('#numero_select').val("");
        $('#uf_select').val("");
        $('#cep_select').val("");
        $('#rua_select').val("");
        $('#bairro_select').val("");
        $('#cidade_select').val("");
    }

    const deletarCliente = (id) => {
        $.ajax({
            type: "post",
            url: "http://localhost/aula-php/lanchonete/deletar.php",
            data: { id },
            async: true,
            dataType: "json",
            success: function (response) {
                alert(response);
                clearFields();
                desligarButtons();
                hideFields();
            }
        });
    }

    const deletar = (id) => {
        var sure = confirm("Deseja deletar o cliente: " + id);

        if (sure) {
            deletarCliente(id);
        }
    }

    const editar = (id) => {

        $.ajax({
            type: "post",
            url: "http://localhost/aula-php/lanchonete/update.php",
            data: {
                id: $('#id_select').val(),
                nome: $('#nome_select').val(),
                email: $('#email_select').val(),
                telefone: $('#telefone_select').val(),
                numero: $('#numero_select').val(),
                uf: $('#uf_select').val(),
                cep: $('#cep_select').val(),
                rua: $('#rua_select').val(),
                bairro: $('#bairro_select').val(),
                cidade: $('#cidade_select').val()
            },
            async: true,
            dataType: "json",
            success: function (response) {
                if (response['erro']) {
                    alert(response['erro']);
                } else {
                    alert(response);
                    clearFields();
                    desligarButtons();
                    hideFields();

                }
            }
        });


    }

    $('#form-select').on('submit', function (e) {
        getCliente();
        enableButtons();
        e.preventDefault();
    })

    $('#action_deletar').on('click', function (e) {
        e.preventDefault();

        const id_deletar = $('#id_select').val();

        deletar(id_deletar)
    })

    $('#action_editar').on('click', function (e) {
        e.preventDefault();
        const id_editar = $('#id_select').val();
        editar(id_editar);
    })

    $('#action_clear').on('click', function (e) {
        e.preventDefault();
        clearFields();
        hideFields();
        desligarButtons();
    })
})
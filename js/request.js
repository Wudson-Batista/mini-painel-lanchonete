$(() => {

    // $.ajax({
    //     type: "get",
    //     url: `http://localhost/aula-php/lanchonete/form-insert.html?nome_cadastro=${nome_cadastro}&email_cadastro=${email_cadastro}&ero_cadastro=${numero_cadastro}&uf_cadastro=${uf_cadastro}&cep_cadastro=${cep_cadastro}&rua_cadastro=${rua_cadastro}&bairro_cadastro=${bairro_cadastro}&cidade_cadastro=${cidade_cadastro}&action_cadastrar=&`,
    //     dataType: "xml",
    //     success: function (response) {
    //         console.log(response.tes)
    //     }
    // });

    const clearFields = () => {
        $('[name=nome_cadastro]').val("");
        $('[name=telefone_cadastro]').val("");
        $('[name=email_cadastro]').val("");
        $('[name=rua_cadastro]').val("");
        $('[name=bairro_cadastro]').val("");
        $('[name=num_cadastro]').val("");
        $('[name=uf_cadastro]').val("");
        $('[name=cep_cadastro]').val("");
        $('[name=numero_cadastro]').val("");
        $('[name=cidade_cadastro]').val("");
    }

    const cadastrarCliente = () => {
        const dados = $('#form').serialize();
        $.ajax({
            type: "post",
            url: "http://localhost/aula-php/lanchonete/cadastrar.php",
            data: dados,
            async: true,
            dataType: "json",
            success: function (response, e) {
                alert(response[0]);
                // clearFields();
            }
        });
    }

    $('#form').on('submit', function (e) {
        if (this.reportValidity()) {
            e.preventDefault();
            cadastrarCliente();
        } else {
            e.preventDefault();
        }
    })
})
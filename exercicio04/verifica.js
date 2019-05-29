function validar_numero(campo, alerta, label) {

    console.log("Validar:" + campo);

    var n = parseFloat($(campo).val());

    if ($(campo).val().length === 0 || isNaN(n)) {

        $(alerta).slideDown();

        $(label).addClass("text-danger");

        $(campo).addClass("is-invalid");

        return false;
    }
//    tudo correto

    $(alerta).hide();
    $(campo).removeClass("is-invalid");
    $(label).removeClass("text-danger");
    $(campo).addClass("is-valid");

    return true;

}

function validar_select(campo, alerta, label) {

    console.log("Validar:" + campo);
    console.log("Validar:" + $(campo).val());

    if ($(campo).val() === "0" || $(campo).prop("checked")=== "checked") {

        $(alerta).slideDown();

        $(label).addClass("text-danger");

        $(campo).addClass("is-invalid");

        return false;
    }
//    tudo correto

    $(alerta).hide();
    $(campo).removeClass("is-invalid");
    $(label).removeClass("text-danger");
    $(campo).addClass("is-valid");

    return true;

}

function validar_radio(campo, alerta, label) {

    console.log("Validar:" + campo);

    if ($(campo).prop("checked")!== "checked") {

        $(alerta).slideDown();

        $(label).addClass("text-danger");

        $(campo).addClass("is-invalid");

        return false;
    }
//    tudo correto

    $(alerta).hide();
    $(campo).removeClass("is-invalid");
    $(label).removeClass("text-danger");
    $(campo).addClass("is-valid");

    return true;

}

function validar(campo, alerta, label) {

    console.log("Validar:" + campo);

    if ($(campo).val().length === 0) {

        $(alerta).slideDown();

        $(label).addClass("text-danger");

        $(campo).addClass("is-invalid");

        return false;
    }
//    tudo correto

    $(alerta).hide();
    $(campo).removeClass("is-invalid");
    $(label).removeClass("text-danger");
    $(campo).addClass("is-valid");

    return true;

}

$(document).ready(function () {

    $("#cadastro").click(function () {
        console.log("ready");
        // var valida_nome = validar("#nome", "#alertaNome", "#labelNome");
        // var valida_peso = validar_numero("#peso", "#alertaPeso", "#labelPeso");
        // var valida_valor = validar_numero("#valor", "#alertaValor", "#labelValor");
        // var valida_estoque = validar_numero("#estoque", "#alertaEstoque", "#labelEstoque");
        // var valida_unidade = validar_select("#unidade", "#alertaUnidade", "#labelUnidade");
        // var valida_mercado = validar_select("input[name='mercado']", "#alertaMercado", "#labelMercado");
        // var valida_fornecedor = validar_select("#fornecedor", "#alertaFornecedor", "#labelFornecedor");

        //if (valida_nome && valida_peso && valida_valor && valida_estoque && valida_unidade && valida_mercado && valida_fornecedor){
        if (validar("#nome", "#alertaNome", "#labelNome") &&
            validar_numero("#peso", "#alertaPeso", "#labelPeso") &&
            validar_select("#unidade option:selected", "#alertaUnidade", "#labelUnidade") &&
            validar_numero("#valor", "#alertaValor", "#labelValor") &&
            validar_numero("#estoque", "#alertaEstoque", "#labelEstoque") &&
            validar_radio("input:radio[name='mercado']:checked", "#alertaMercado", "#labelMercado") &&
            validar_select("#fornecedor", "#alertaFornecedor", "#labelFornecedor")){

        } else {
            $("#alerta").slideDown();
            return false;
        }
    });
});
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

function Corredor(nome, tempo, largada){
    this.nome = nome;
    this.tempo = tempo;
    this.largada = largada;
}

$(document).ready(function () {

    $("#apurar").click(function () {
        console.log("ready");

        if (validar("#nome1", "#alertaNome1", "#Largada1") &&
            validar_numero("#tempo1", "#alertaTempo1", "#labelLargada1") &&
            validar("#nome2", "#alertaNome2", "#Largada2") &&
            validar_numero("#tempo2", "#alertaTempo2", "#labelLargada2") &&
            validar("#nome3", "#alertaNome3", "#Largada3") &&
            validar_numero("#tempo3", "#alertaTempo3", "#labelLargada3") &&
            validar("#nome4", "#alertaNome4", "#Largada4") &&
            validar_numero("#tempo4", "#alertaTempo4", "#labelLargada4") &&
            validar("#nome5", "#alertaNome5", "#Largada5") &&
            validar_numero("#tempo5", "#alertaTempo5", "#labelLargada5") &&
            validar("#nome6", "#alertaNome6", "#Largada6") &&
            validar_numero("#tempo6", "#alertaTempo6", "#labelLargada6")) {

            var corredores = [];
            var i;

            for (i = 1; i <= 6; i++) {

                var corredor = new Corredor($('#nome' + i).val(), $("#tempo" + i).val(), i);
                console.log(corredor.nome);
                corredores.push(corredor);

            }

            corredores.sort(function (a, b) {
                return a.tempo - b.tempo;
            });

            var table = "";
            for (i = 0; i < 6; i++) {

                table +=
                    "<tr>" +
                    "<td>" + (i+1) + "</td>" +
                    "<td>" + corredores[i].largada + "</td>" +
                    "<td>" + corredores[i].nome + "</td>" +
                    "<td>" + corredores[i].tempo + "</td>";
                if ((i+1) === 1 || ((i+1) !== 1 && corredores[i].tempo === corredores[0].tempo)) {
                    table += "<td>" + "vencedor" + "</td>";
                } else {
                    table += "<td>" + "" + "</td>";
                }

                table += "</tr>";
            }

            $("td").remove();
            $('#dados').append(table);

        } else {

            return false;
        }
    });
});
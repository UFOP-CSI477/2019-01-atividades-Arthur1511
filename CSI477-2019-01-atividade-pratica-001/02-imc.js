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

$(document).ready(function () {

    $('#calcular').click(function () {

        if (validar_numero('#peso', '#alertaPeso', '#labelPeso') && validar_numero('#altura', '#alertaAltura', '#labelAltura')) {

            var peso = parseFloat($('#peso').val());
            var altura = parseFloat($('#altura').val());

            var imc = (peso) / (Math.pow(altura, 2));

            imc = Math.round(imc);
            var resultado = "";

            var peso_min, peso_max;

            console.log(imc);
            if (imc >= 18.5 && imc <= 24.9) {
                resultado += "<p>Imc: " + imc + "</p> <p>Classificação: Saudável</p>";
            }
            if (imc < 18.5) {
                peso_min = Math.round(18.5 * (Math.pow(altura, 2)));
                peso_max = Math.round(24.9 * (Math.pow(altura, 2)));

                resultado += "<p>Imc: " + imc + "</p> " +
                    "<p>Classificação: Subnutrição</p>" +
                    "<p>Peso ideal: Entre " + peso_min + "Kg e" + peso_max + "Kg</p>";
            }
            if (imc >= 25 && imc <= 29.9) {
                peso_min = Math.round(18.5 * (Math.pow(altura, 2)));
                peso_max = (Math.round(24.9 * (Math.pow(altura, 2))));

                resultado += "<p>Imc: " + imc + "</p> " +
                    "<p>Classificação: Sobrepeso</p>" +
                    "<p>Peso ideal: Entre " + peso_min + "Kg e " + peso_max + "Kg</p>";
            }
            if (imc >= 30 && imc <= 34.9) {
                peso_min = Math.round(18.5 * (Math.pow(altura, 2)));
                peso_max = Math.round(24.9 * (Math.pow(altura, 2)));

                resultado += "<p>Imc: " + imc + "</p> " +
                    "<p>Classificação: Obesidade grau 1</p>" +
                    "<p>Peso ideal: Entre " + peso_min + "Kg e" + peso_max + "Kg</p>";
            }
            if (imc >= 35 && imc <= 39.9) {
                peso_min = Math.round(18.5 * (Math.pow(altura, 2)));
                peso_max = Math.round(24.9 * (Math.pow(altura, 2)));

                resultado += "<p>Imc: " + imc + "</p> " +
                    "<p>Classificação: Obesidade grau 2</p>" +
                    "<p>Peso ideal: Entre " + peso_min + "Kg e" + peso_max + "Kg</p>";
            }

            if (imc >= 40) {
                peso_min = Math.round((Math.round(18.5 * (Math.pow(altura, 2)))));
                peso_max = Math.round((Math.round(24.9 * (Math.pow(altura, 2)))));

                resultado += "<p>Imc: " + imc + "</p> " +
                    "<p>Classificação: Obesidade grau 3</p>" +
                    "<p>Peso ideal: Entre " + peso_min + "Kg e" + peso_max + "Kg</p>";
            }
            $("p").remove();
            $('#dados').append(resultado);

            return true;
        } else {
            return false;
        }
    })
});
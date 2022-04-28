
var erros = document.getElementsByClassName('erro');
for (var i = 0; i < erros.length; i++) {
    erros[i].style.display = 'none';
}


var valor_mensal = document.getElementById('valor_pagar').value;
var qtdmes = 0;
var mes = 0;
var meses = '';

// função para mostrar ou ocultar campos do formulário
// function MostraCampos() {

// 	var pagamento = document.getElementById('cPagamento').selectedIndex;

// 	switch (pagamento) {
// 		case 1: {

// 			document.getElementById('dv-banco').style.display = 'none';
// 			document.getElementById('dv-num_validacao').style.display = 'none';
// 		}

// 		case 0:{
// 			document.getElementById('dv-banco').style.display = 'none';
// 			document.getElementById('dv-num_validacao').style.display = 'none';
// 		}
// 		break;
// 		default: {
//             document.getElementById('dv-banco').style.display = 'block';
// 			document.getElementById('dv-num_validacao').style.display = 'block';
// 		}
// 	}
// }

function mostraC() {

    var ca = document.getElementById('Check1');

    if (ca.checked == true) {
        document.getElementById('Check2').removeAttribute('disabled');
        qtdmes++;
        mes = 2;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check2').setAttribute('disabled', 'false');
        qtdmes--;
    }

    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}


function mostraC1() {

    var ca = document.getElementById('Check2');

    if (ca.checked == true) {
        document.getElementById('Check3').removeAttribute('disabled');
        qtdmes++;
        mes = 3;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check3').setAttribute('disabled', 'false');
        qtdmes--;
    }

    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC2() {

    var ca = document.getElementById('Check3');

    if (ca.checked == true) {
        document.getElementById('Check4').removeAttribute('disabled');
        qtdmes++;
        mes = 4;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check4').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC3() {

    var ca = document.getElementById('Check4');

    if (ca.checked == true) {
        document.getElementById('Check5').removeAttribute('disabled');
        qtdmes++;
        mes = 5;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check5').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC4() {

    var ca = document.getElementById('Check5');

    if (ca.checked == true) {
        document.getElementById('Check6').removeAttribute('disabled');
        qtdmes++;
        mes = 6;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check6').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC5() {

    var ca = document.getElementById('Check6');

    if (ca.checked == true) {
        document.getElementById('Check7').removeAttribute('disabled');
        qtdmes++;
        mes = 7;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check7').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC6() {

    var ca = document.getElementById('Check7');

    if (ca.checked == true) {
        document.getElementById('Check8').removeAttribute('disabled');
        qtdmes++;
        mes = 8;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check8').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC7() {

    var ca = document.getElementById('Check8');

    if (ca.checked == true) {
        document.getElementById('Check9').removeAttribute('disabled');
        qtdmes++;
        mes = 9;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check9').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC8() {

    var ca = document.getElementById('Check9');

    if (ca.checked == true) {
        document.getElementById('Check10').removeAttribute('disabled');
        qtdmes++;
        mes = 10;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check10').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;
}

function mostraC9() {

    var ca = document.getElementById('Check10');

    if (ca.checked == true) {
        document.getElementById('Check11').removeAttribute('disabled');
        qtdmes++;
        mes = 11;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check11').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;

}

function mostraC10() {

    var ca = document.getElementById('Check11');

    if (ca.checked == true) {
        document.getElementById('Check12').removeAttribute('disabled');
        qtdmes++;
        mes = 12;
        meses += ca.value + ' ';
    }
    else {
        document.getElementById('Check12').setAttribute('disabled', 'false');
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;
}

function mostraC11() {

    var ca = document.getElementById('Check12');

    if (ca.checked == true) {
        qtdmes++;
        mes = 13;
        meses += ca.value + ' ';
    }
    else {
        qtdmes--;
    }
    document.getElementById('total').innerHTML = valor_mensal * qtdmes;
    document.getElementById('mes').value = mes;
    document.getElementById('qtdmes').value = qtdmes;
    document.getElementById('meses').value = meses;
}


function validacao() {

    var erros = document.getElementsByClassName('erro');
    for (var i = 0; i < erros.length; i++) {
        erros[i].style.display = 'none';
    }

    var retorno = true;
    var pagamento = document.getElementById('cPagamento').selectedIndex;
    var banco = document.getElementById('cBanco').selectedIndex;
    var num_validacao = document.getElementById('cNumValidacao').value;


    if (qtdmes == 0) {
        erros[0].style.display = 'block';
        erros[0].innerHTML = 'Seleccione os meses a pagar';
        retorno = false;
    }

    if (pagamento == null || pagamento == 0) {
        erros[1].style.display = 'block';
        erros[1].innerHTML = 'Informe a forma de pagamento';
        retorno = false;
    }
    else if (pagamento != 1) {
        if (banco == null || banco == 0) {
            erros[2].style.display = 'block';
            erros[2].innerHTML = 'Informe o nome do banco';
            retorno = false;
        }

        if (num_validacao == null || num_validacao.length == 0 || /^\s+$/.test(num_validacao)) {
            erros[3].style.display = 'block';
            erros[3].innerHTML = 'Digite o número de validação';
            retorno = false;
        }
    }

    return retorno;
}

// function validacao1() {

//     var erros = document.getElementsByClassName('erro');
//     for (var i = 0; i < erros.length; i++) {
//         erros[i].style.display = 'none';
//     }

//     var retorno = true;

//     var numProcesso = document.getElementById('cProcesso').value;
//     var ano = document.getElementById('cAno').selectedIndex;

//     if ((numProcesso == null || numProcesso.length == 0 || /^\s+$/.test(numProcesso))) {
//         erros[0].style.display = 'block';
//         erros[0].innerHTML = 'Digite o número de processo';
//         retorno = false;
//     }

//     if (ano == null || ano == 0) {
//         erros[1].style.display = 'block';
//         erros[1].innerHTML = 'Informe o Ano lectivo';
//         retorno = false;
//     }

//     return retorno;
// }
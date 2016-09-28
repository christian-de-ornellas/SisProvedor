/* 
 Christian de Ornellas Adicionando o Javascript
 */

/*MASCARAS PARA CPF, RG, TEL E CEL Podendo-se adicionar outros campos*/
// <![CDATA[
jQuery(function ($) {
    $.mask.definitions['~'] = '[+-]';
    //Inicio Mascara Telefone
    $('input[type=tel]').mask("(99) 9999-9999?9").ready(function (event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if (phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });
    //Fim Mascara Telefone
    $("#cpf").mask("999.999.999-99");
    $("#cnpj").mask("999999/999-99");
    $("#rg").mask("99.999.999-*");
    $("#nasc").mask("99/99/9999");
});
// ]]>

/*BUSCANDO ENDEREÇO POR CEP*/

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    document.getElementById('ibge').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
        document.getElementById('ibge').value = (conteudo.ibge);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";
            document.getElementById('ibge').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}
;
/*FIM BUSCANDO ENDEREÇO POR CEP*/

/*JQUERY UI*/
$(function () {
    $("#tabs").tabs();
});

$(function () {
    $("input").checkboxradio();
});

$(function () {
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

    $("#opener").on("click", function () {
        $("#dialog").dialog("open");
    });
});
$("#accordion").accordion();



var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
];
$("#autocomplete").autocomplete({
    source: availableTags
});



$("#button").button();
$("#button-icon").button({
    icon: "ui-icon-gear",
    showLabel: false
});



$("#radioset").buttonset();



$("#controlgroup").controlgroup();



$("#tabs").tabs();



$("#dialog").dialog({
    autoOpen: false,
    width: 400,
    buttons: [
        {
            text: "Ok",
            click: function () {
                $(this).dialog("close");
            }
        },
        {
            text: "Cancel",
            click: function () {
                $(this).dialog("close");
            }
        }
    ]
});

// Link to open the dialog
$("#dialog-link").click(function (event) {
    $("#dialog").dialog("open");
    event.preventDefault();
});



$("#datepicker").datepicker({
    inline: true
});



$("#slider").slider({
    range: true,
    values: [17, 67]
});



$("#progressbar").progressbar({
    value: 20
});



$("#spinner").spinner();



$("#menu").menu();



$("#tooltip").tooltip();



$("#selectmenu").selectmenu();


// Hover states on the static widgets
$("#dialog-link, #icons li").hover(
        function () {
            $(this).addClass("ui-state-hover");
        },
        function () {
            $(this).removeClass("ui-state-hover");
        }
);

/*IE MAIN_MENU_LEFT*/

startList = function () {
    if (document.all && document.getElementById) {
        navRoot = document.getElementById("nav");
        for (i = 0; i < navRoot.childNodes.length; i++) {
            node = navRoot.childNodes[i];
            if (node.nodeName == "LI") {
                node.onmouseover = function () {
                    this.className += " over";
                }
                node.onmouseout = function () {
                    this.className = this.className.replace
                            (" over", "");
                }
            }
        }
    }
}
window.onload = startList;

/* GRÁFICO DO GOOGLE CHARS*/
google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Vila Norma', 11],
        ['Vila São João', 2],
        ['Íraja', 2],
        ['Pavuna', 2],
        ['Nova Iguaçu', 7]
    ]);

    var options = {
        title: 'Bairros'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
/*DASH INTERATIVOS*/
$(function () {
    $(".column").sortable({
        connectWith: ".column",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all"
    });

    $(".portlet")
            .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
            .find(".portlet-header")
            .addClass("ui-widget-header ui-corner-all")
            .prepend("<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

    $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
        icon.closest(".portlet").find(".portlet-content").toggle();
    });
});
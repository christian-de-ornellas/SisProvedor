<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="js/jquery-ui/external/jquery/jquery.js"></script>
       
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work', 11],
                    ['Eat', 2],
                    ['Commute', 2],
                    ['Watch TV', 2],
                    ['Sleep', 7]
                ]);

                var options = {
                    title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
        <script>

    
/*  
 *  ###########################################################
 *  Ao clicar no botão pf ou pj aparece suas repesctivas opções
 *  ###########################################################
 */

$(document).ready(function () {
    $(".pf").click(function () {
        $("#pj").hide();
    });
    
    $(".pj").click(function () {
        $("#pf").hide();
    });
});

</script>
    </head>
    <body>
        <div id="piechart" style="width: 400px; height:200px;"></div>




 <div id="tabs-1">
                <form  method="post">
                    <!-- 
                   ###########################
                        TIPO DE CLIENTE
                   ###########################
                    -->
                    <label>
                        <label for="radio-1">Pessoa Física</label>
                        <input type="radio" name="pessoa" class="pf" id="radio-1">
                        <label for="radio-2">Pessoa Jurídica</label>
                        <input type="radio" name="pessoa" class="pj" id="radio-2">                                                          
                    </label><br/><br/>
                    
                    <input type="radio" name="pessoa" class="pf"/>Pessoa Física
                    <input type="radio" name="pessoa" class="pj"/>Pessoa Jurídica
                    <!-- 
                  ###########################
                       PESSOA JURÍDICA
                  ###########################
                    -->
                    <div id="pj">
                        <label>
                            <input type="text" class="sis-form" size="32" name="razaosocial" placeholder="Razão social: " title="Razão social: "/>
                        </label>

                        <label>
                            <input type="text" class="sis-form" size="32" name="fantasia" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                        </label>

                        <label>
                            <input type="text" class="sis-form"size="13" name="cnpj" id="cnpj"placeholder="Cnpj: " title="Cnpj: "/>
                        </label>

                        <input type="text" class="sis-form" size="15" name="ie" placeholder="Estadual:" title="Informe o nome"/>
                    </div>
                    <!-- 
                  ###########################
                       PESSOA FÍSICA
                  ###########################
                    -->
                    <div id="pf">                        
                        <label>
                            <input type="text" class="sis-form" size="85" name="nome" placeholder="Nome completo:" title="Informe o nome"/>
                        </label>

                        <label> 
                            <select class="sis-form" name="sexo">
                                <option value="">Sexo</option>
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select>
                        </label>

                        <label>
                            <input type="text" class="sis-form" size="6" name="nasc"  id="nasc" placeholder="Nasc:" title="Informe a data de nascimento!" />
                        </label>

                        <label>
                            <input type="text" class="sis-form" size="11" name="cpf" id="cpf" placeholder="Cpf:" required title="Informe o número do CPF!" />
                        </label>

                        <label>
                            <input type="text" class="sis-form" size="9"name="rg" id="rg" placeholder="Rg:" title="Infome o número de RG!"/>
                        </label>
                    </div>

                    <input type="email" class="sis-form" size="32" name="email" placeholder="E-mail:" title="Informe um e-mail válido!"/>

                    <input type="tel" class="sis-form" size="9" name="tel" id="tel" placeholder="Tel 01:" title="Informe um número de telefone fixo!"/>

                    <input type="tel" class="sis-form" size="9" name="cel" id="cel" placeholder="Tel 02:" title="Informe um número de celular!"/>

                    <input type="tel" class="sis-form" size="9"name="cel" id="cel" placeholder="Tel 03:" title="Informe um número de celular!"/>

                    <textarea rows="3"class="sis-form box-100" placeholder="Observação:"></textarea>
                    <div class="box100">
                        <button type="reset" class="sis-btn-vermelho box-20">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>        
                        <button type="button" name="next" class="sis-btn-verde box-20">Continuar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                    </div>
            </div> 


    </body>
</html>

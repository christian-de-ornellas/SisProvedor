</main>
<!--################ FINAL CONTEÚDO DINÂMICO #####################-->
<footer class=" container main_footer">
    <div class="content">
        <h1 class="fontzero" title="SisProvedor Beta 1.5" alt="[SisProvedor Beta 1.5]">SisProvedor Beta 1.5</h1>
        <?php $ano = date('Y'); ?>
        <p class="tagline" title="Creditos: Christian de Ornellas CEO FOUNDER & Desenvolvedor, Cristiano Santos CEO FOUNDER & Engenheiro de Software" alt="[SisProvedor Beta 1.5]">Copyright &COPY; SisProvedor <?= $ano; ?> &nbsp; VERSÃO BETA 1.5</p>
        <div class="clear"></div>
    </div>
</footer>
<!--###########################ARQUIVOS JAVA SCRIPT################ -->
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>   
<script src="js/jquery-ui/jquery-ui.js"></script>
<script src="js/jquery.maskedinput-1.3.1.min.js"></script>
<script type="text/javascript">

    var $a = jQuery.noConflict();

    /*  
     *  #################################################################
     *  
     *  #################################################################
     */

    
    
    /*  
     *  #################################################################
     *                     AUTOCOMPLETE DA BUSCA
     *  #################################################################
     */

    var availableTags = [
        "10MEGA",
        "20MEGA",
        "30MEGA"
    ];
    $a("#autocomplete").autocomplete({
        source: availableTags
    });

    /*  
     *  #################################################################
     *          RETIRA CONFLITO DE CONFIGURAÇÃO NAS BIBLIOTECAS
     *  #################################################################
     */
    $a(document).ready(function () {
        $a(".pf").click(function () {
            $a("#pj").hide();
        });

        $a(".pj").click(function () {
            $a("#pf").hide();
        });
    });

    /*  
     *  ################################################################
     *  BOTÃO PARA ESCOLHER O TIPO DE CLIENTE: PESSOA FÍSICA OU JURÍDICA
     *  ################################################################
     */
    $a(function () {
        $a("input").checkboxradio({
            icon: false
        });
    });
    /*  
     *  ################################################################
     *     BOTÃO PARA HABILITAR SE DESEJA OU NÃO A REDE SEM FIO
     *  ################################################################
     */

    $a(document).ready(function () {
        $a('#rede').hide();
        $a("#habilita").click(function () {
            $a("#rede").show(1000);
            $a("#habilita").removeClass("sis-btn-vermelho").addClass("sis-btn-verde");
        });
        $a('#habilita').dblclick(function () {
            $a('#rede').hide(1000);
            $a("#habilita").removeClass("sis-btn-verde").addClass("sis-btn-vermelho");
        });
    });
    /*  
     *  ######################################################################################
     *  SE DER UM CLIQUE EM TELA CHEIA O LAYOUT FICA CENTRALIZADO, DOIS CLIQUES VOLTA AO NORMAL
     *  #######################################################################################
     */

    $a(document).ready(function () {

        $a("#tela-cheia").click(function () {
            $a("#menu-lateral").hide(1000);
            $a("main").removeClass("normal").addClass("oculto");
            $a("main").removeClass("normal").addClass("oculto");
            $a("#tela-cheia").addClass("fcolor_orange");
        });

        $a("#tela-cheia").dblclick(function () {
            $a("#menu-lateral").show(1000);
            $a("main").removeClass("oculto").addClass("normal");
            $a("#tela-cheia").removeClass("fcolor_orange").addClass('fcolor_branco');
        });

    });

    /*  
     *  ###########################################################
     *                             TABS
     *  ###########################################################
     */
    $a("#tabs").tabs();

// numero de tabs geradas
    $anumTabs = parseInt($a("#tabs ul li").length) - 2;

    $a('#ant').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a primeira, nao deixa mudar
        // caso contrário, vai pra anterior
        if ($acurrentTab == 1) {
            alert("Já está na primeira aba");
        } else {
            $a("#ui-id-" + ($acurrentTab - 1)).click();
        }
    })

    $a('#prox').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a ultima, nao deixa mudar
        // caso contrário, vai pra prox
        if ($acurrentTab == $anumTabs) {
           alert("Já está na última aba");
        } else {
            $a("#ui-id-" + ($acurrentTab + 1)).click();
        }
    });
    $a('#ant1').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a primeira, nao deixa mudar
        // caso contrário, vai pra anterior
        if ($acurrentTab == 1) {
            alert("Já está na primeira aba");
        } else {
            $a("#ui-id-" + ($acurrentTab - 1)).click();
        }
    })

    $a('#prox1').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a ultima, nao deixa mudar
        // caso contrário, vai pra prox
        if ($acurrentTab == $anumTabs) {
            alert("Já está na última aba");
        } else {
            $a("#ui-id-" + ($acurrentTab + 1)).click();
        }
    });
    $a('#ant2').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a primeira, nao deixa mudar
        // caso contrário, vai pra anterior
        if ($acurrentTab == 1) {
            alert("Já está na primeira aba");
        } else {
            $a("#ui-id-" + ($acurrentTab - 1)).click();
        }
    })

    $a('#prox2').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a ultima, nao deixa mudar
        // caso contrário, vai pra prox
        if ($acurrentTab == $anumTabs) {
           alert("Já está na última aba");
        } else {
            $a("#ui-id-" + ($acurrentTab + 1)).click();
        }
    });
    $a('#ant3').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a primeira, nao deixa mudar
        // caso contrário, vai pra anterior
        if ($acurrentTab == 1) {
            alert("Já está na primeira aba");
        } else {
            $a("#ui-id-" + ($acurrentTab - 1)).click();
        }
    })

    $a('#prox3').click(function () {
        // aba que esta ativa no momento
        $acurrentTab = parseInt($a("#tabs ul li.ui-state-active a").attr("id").replace(/\D/g, ''));

        // se for a ultima, nao deixa mudar
        // caso contrário, vai pra prox
        if ($acurrentTab == $anumTabs) {
            alert("Já está na última aba");
        } else {
            $a("#ui-id-" + ($acurrentTab + 1)).click();
        }
    });
   

</script> 
</body>
</html>

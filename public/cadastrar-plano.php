<?php include_once('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<section class="container">
    <div class="content">
        <?php require_once('../model/Planos.php'); ?>  
        <!-- 
                      ###########################
                           MENU DE INTERAÇÃO
                      ###########################
        --> 
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-retweet" aria-hidden="true"></i> Cadastrar Plano</h3>
            <ul>
                <li><a href="cadastrar-plano">Novo Plano /</a></li>
                <li><a href="consultar-plano">Consultar Plano </a></li>                           
            </ul> 
        </div>  
        <!-- 
                         ####################################
                            DADOS PARA INSERIR NA RADGROUP
                         ####################################
        -->
        <article class="painel-header box-100 widget" id="tabs">
            <header class="bg_orange"></header>
            <ul>
                <li><a href="#tabs-1">Detalhes</a></li>
                <li><a href="#tabs-2">Valor</a></li>           
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- 
                       ####################################
                       ########## DADOS DO PLANO ##########
                       ####################################
                    -->                              
                    <label>
                        <input type="text" class="sis-form box-50" name="groupname" placeholder="Nome do plano:" title="Nome do plano:" required/>                       
                    </label>

                    <label>
                        <input type="text" class="sis-form box-50" name="value" placeholder="Tamanho do plano:" title="Tamanho do plano:" required/>                       
                    </label>                                       

            </div> 
            <!-- 
                       ####################################
                       ######### VALOR DO PLANO ###########
                       ####################################
            --> 
            <div id="tabs-2">
                <label>
                    <input type="text" class="sis-form box-50" name="valor" id="valor" placeholder="Valor do plano:" title="Valor do plano:" required/>                       
                </label>

            </div>

            <footer class="box-100">
                <button type="reset" name="" class="sis-btn-vermelho box-20">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="sis-btn-verde box-20">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>                
                </form>	               
            </footer>
        </article>
        <!-- 
                      ####################################
                      ####### PLANOS CADASTRADOS ########
                      ####################################
        -->         
        <div class="box-100 painel-padrao nav-title bg-silver">
            <h3 class="fcolor_branco"><i class="fa fa-user" aria-hidden="true"></i> Planos cadastrados:</h3>           
        </div>  
        <article class="painel-header itens box-100">        
            <table class="sis-table box-100">
                <?php foreach ($Plan->UltimosPlanos() as $key => $ConsultPlan): ?>
                    <tr>        
                        <td><?= $ConsultPlan->groupname; ?></td>
                        <td><?= $ConsultPlan->value; ?></td>
                        <td><b>R$ <?= $ConsultPlan->valor; ?></b></td>  
                    </tr>
                <?php endforeach; ?>


            </table>          
        </article>

</section>


<?php include_once('footer.php'); ?>
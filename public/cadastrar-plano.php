<?php include_once('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Plan.php'); ?>  
<div class="container">
    <div class="content">		
        <article class="main_panel">
            <header><h2  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"> Novo Plano</h2></header>
            <div class="main_form">
                <form action="" method="post">
                    <!-- Dados Gerais -->
                    <label><small>NOME DO PLANO:</small>
                        <input type="text" class="form-100" name="groupname" placeholder="Premium, Master" title="Informe o nome do plano"/>
                    </label>


                    <label><small>CONEXÃO:</small>
                        <input type="text" class="form-100" name="value" placeholder="ex: 1500k/1500k" title="Informe o tamanho" />
                    </label>
                    <!--<label><small>DOWNLOADS:</small>
                    
                            <input type="text" class="form-100" name="" placeholder="20022kb" title="Infome o número de downloads mensais"/>
                    </label>
                    <label><small>UPLOADS:</small>
                            <input type="text" class="form-100" name="" placeholder="20050kb" title="Informe o número de uploads mensais"/>
                    </label>-->

                    <label><small>VALOR:</small>
                        <input type="text" class="form-100" name="valor" placeholder="R$ 999,00" title="Informe o valor do plano"/>
                    </label>


            </div>
            <footer>
                <button type="reset" name="" class="btn">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="btn">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <a href="create-client"><button type="submit" name="" class="btn">ADICIONAR <i class="fa fa-plus-square" aria-hidden="true"></i></button></a>

                </form>	
            </footer>
        </article>
    </div>
    <div class="clear"></div>
</div>

<?php include_once('footer.php'); ?>
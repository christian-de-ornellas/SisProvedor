<?php include_once('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>  
<?php require_once('../model/Plan.php'); ?>  
<div class="container">
    <div class="content">		
        <article class="main_client">
            <header><h2  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"> Criar Acesso</h2></header>
            <div class="main_form">
                <form action="" method="post">
                    <!-- Dados Gerais -->
                    <label><small>NOME DO CLIENTE:</small>
                        <select class="form-100" name="" title="">
                            <option value=""></option>
                            <?php foreach ($Clients->findAll() as $key => $values): ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $values->nome; ?> <?php echo $values->sobrenome; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>


                    <label><small>PLANOS:</small>
                        <select class="form-100" name="" title="">
                            <option value=""></option>
                            <?php foreach ($Plan->findAll() as $key => $value): ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $value->groupname; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>

                    </label>
                    <label><small>LOGIN:</small>

                        <input type="text" class="form-100" name="" placeholder="Digite um nome para usuário" title="Infome um nome de usuário"/>
                    </label>
                    <label><small>SENHA:</small>
                        <input type="password" class="form-100" name="" placeholder="Digite uma senha válida" title="Informe uma senha"  size="10"/>
                    </label>

            </div>
            <footer>

                <button type="reset" name="" class="btn">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="" class="btn">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <button type="submit" name="" class="btn">ADICIONAR UM CLIENTE <i class="fa fa-plus-square" aria-hidden="true"></i></button>

                </form>	
            </footer>
        </article>
    </div>
    <div class="clear"></div>
</div>

<?php include_once('footer.php'); ?>
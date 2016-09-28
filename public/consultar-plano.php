<?php include_once('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Plan.php'); ?>  
<div class="container">
    <div class="content">		
        <article class="main_panel">
            <header><h2  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"> <input type="text" class="form-100" name="" placeholder="Consultar"></h2></header>
            <div class="main_form">
                <table>
                    <tr>
                        <th>PLANO</th>
                        <th>CONEXÃO</th>
                        <th>VALOR</th>                        
                        <th>ação</th>                        
                    </tr>
                    <?php foreach ($Plan->findAll() as $key => $ConsultPlan): ?>
                        <tr>
                            <td><?= $ConsultPlan->groupname; ?></td>
                            <td><?= $ConsultPlan->value; ?></td>
                            <td><?= $ConsultPlan->valor; ?></td>                            
                            <td>Editar | Excluir</td>                            
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <footer>
                <button type="reset" name="" class="btn">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="" class="btn">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <a href="create-plan"><button type="submit" name="" class="btn">ADICIONAR <i class="fa fa-plus-square" aria-hidden="true"></i></button></a>
            </footer>
        </article>
    </div>
    <div class="clear"></div>
</div>


<?php include_once ('footer.php'); ?>
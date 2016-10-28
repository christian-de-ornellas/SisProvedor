<?php require_once ('header.php'); ?>
<?php require_once ('../controller/Config.inc.php'); ?>
<section class="container">
    <div class="content">
        <?php require_once ('../model/Fornecedor.php'); ?>
        <?php require_once ('../model/Produto.php'); ?>
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Cadastrar Produto</h3>
            <ul>
                <li><a href="cadastrar-fornecedor">Novo Fornecedor /</a></li>
                <li><a href="cadastrar-produto">Novo Produto /</a></li>
                <li><a href="consultar">Consultar Fornecedor /</a></li>
                <li><a href="consultar">Consultar Produto</a></li>                
            </ul> 
        </div>  
        <!-- ABAS DO FORMULARIO -->
        <article class="painel-header box-100 widget" id="tabs">
            <header class="bg_orange"></header>
            <ul>
                <li><a href="#tabs-1">Produto</a></li>
                <li><a href="#tabs-2">Valor</a></li>          
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- 
                    #############################################
                    ##    CARREGA OS DADOS DE RADFORNECEDOR    ##
                    #############################################                    
                    -->  
                    <label>
                        <select name="fornecedor_id" class="sis-form">
                            <option>Produtos</option>  
                            <?php foreach ($Fornecedor->findAll() as $key => $buscarFornecedor): ?>
                                <option value="<?= $buscarFornecedor->id; ?>"><?= $buscarFornecedor->id; ?> <?= $buscarFornecedor->nome_fantasia; ?></option>   
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <label>
                        <input type="text" class="sis-form" size="32" name="nota_fiscal" placeholder="Nota Fiscal: " title="Nota Fiscal: "/>
                    </label>
                    <label>
                        <input type="text" class="sis-form" size="32" name="data_nota" placeholder="Data da nota: " title="Data da nota fiscal: "/>
                    </label>

                    <label>
                        <input type="text" class="sis-form"size="13" name="nome_produto" placeholder="Nome do produto: " title="Nome do produto: "/>
                    </label>

                    <label>
                        <input type="text" class="sis-form" size="15" name="n_serie" placeholder="Nº de série:" title="Nº de série"/> 
                    </label>
                    <label>
                        <input type="number" class="sis-form" size="5" name="estoque" placeholder="Estoque:" title="Estoque:"/>                    
                    </label>
                    <label>
                        <input type="number" class="sis-form box-10" size="10" name="peso" placeholder="Peso:" title="Peso:"/>                    
                    </label>
                    <label>
                        <input type="number" class="sis-form box-10" size="10" name="altura" placeholder="Altura:" title="Altura:"/>                    
                    </label>
                    <label>
                        <input type="number" class="sis-form box-10" size="10" name="largura" placeholder="Largura:" title="Largura:"/>                    
                    </label>
                    <label>
                        <input type="number" class="sis-form" size="10" name="profundidade" placeholder="Profundidade:" title="Profundidade:"/>
                    </label>
                    <label>
                        <textarea name="descricao" rows="3"class="sis-form box-100" placeholder="Descrição do produto:"></textarea>                    
                    </label>

            </div> 
            <!-- Valores --> 
            <div id="tabs-2">
                <label>
                    <input type="text" class="sis-form" size="32" name="preco" placeholder="Preço: " title="Preço: "/>
                </label>
                <label>
                    <input type="text" class="sis-form" size="32" name="ipi" placeholder="IPI: " title="IPI: "/>
                </label>
                <label>                
                    <input type="text" class="sis-form" size="32" name="icms" placeholder="ICMS: " title="ICMS: "/>
                </label>
            </div>

            <footer class="box-100">
                <button type="reset" name="" class="sis-btn-vermelho box-20">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="cad-produto" class="sis-btn-verde box-20">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
               
                </form>	               
            </footer>
        </article>
              
       <!-- 
                      ####################################
                      ####### PLANOS CADASTRADOS ########
                      ####################################
        -->         
        <div class="box-100 painel-padrao nav-title bg-silver">
            <h3 class="fcolor_branco"><i class="fa fa-user" aria-hidden="true"></i> Produtos Cadastrados:</h3>           
        </div>  
        <article class="painel-header itens box-100">        
            <table class="sis-table box-100">
                <?php foreach ($Produto->findAll() as $key => $buscarProdutos): ?>
                    <tr>        
                        <td><?= $buscarProdutos->id; ?></td>
                        <td><?= $buscarProdutos->nome_produto; ?></td>
                        <td><?= $buscarProdutos->nota_fiscal; ?></td>  
                        <td><?= $buscarProdutos->estoque; ?></td>  
                        <td><?= $buscarProdutos->peso; ?></td>  
                        <td><?= $buscarProdutos->altura; ?></td>  
                        <td><?= $buscarProdutos->largura; ?></td>  
                        <td><?= $buscarProdutos->profundidade; ?></td>  
                        <td><?= $buscarProdutos->preco; ?></td>  
                    </tr>
                <?php endforeach; ?>
            </table>          
        </article>
        <div class="clear"></div>
    </div>
</section>
<?php require_once ('footer.php'); ?>
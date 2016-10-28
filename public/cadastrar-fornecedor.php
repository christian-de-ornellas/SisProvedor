<?php require_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<section class="container">
    <div class="content">
        <?php require_once('../model/Fornecedor.php'); ?>  
        <!-- 
                    ###########################
                         MENU DE INTERAÇÃO
                    ###########################
        --> 
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-wpforms" aria-hidden="true"></i> Cadastrar Fornecedor</h3>
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
                <li><a href="#tabs-1">Dados Comerciais</a></li>
                <li><a href="#tabs-2">Localidade</a></li>             
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- 
                     ###########################
                          DADOS COMERCIAS
                     ###########################
                    -->       
                    <label>
                        <input type="text" class="sis-form" size="32" name="razao_social" placeholder="Razão social: " title="Razão social: "/>
                    </label>
                    <label>
                        <input type="text" class="sis-form" size="32" name="nome_fantasia" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                    </label>
                    <label>
                        <input type="text" class="sis-form"size="13" name="cnpj" id="cnpj" placeholder="Cnpj: " title="Cnpj: "/>
                    </label>
                    <label>
                        <input type="text" class="sis-form" size="15" name="ie" placeholder="Estadual:" title="Nome:"/>                    
                    </label>
                    <label>
                        <input type="email" class="sis-form" size="32" name="email" placeholder="E-mail:" title="E-mail:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form" size="9" name="tel" id="tel" placeholder="Telefone fixo:" title="Telefone fixo:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form" size="9" name="cel" id="cel" placeholder="Celular:" title="Celular:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form" size="9"name="cel_opt" id="cel" placeholder="Celular Opcional:" title="Celular Opcional:"/>                    
                    </label>
                    <!---
                    <label>
                        <ul class="box100">                                          
                            <li><a id="prox" class="box20 sis-btn-verde">Continuar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </label>
                    -->
            </div> 
            <!-- Localização --> 
            <div id="tabs-2">
                <label>
                    <input type="text" class="sis-form" size="6" name="cep" id="cep" placeholder="Cep:" title="Cep:" size="10" maxlength="9"
                           onblur="pesquisacep(this.value);"/>
                </label>

                <label>
                    <input type="text" class="sis-form" size="85" name="rua" id="rua" placeholder="Rua:" title="Rua:" size="60" />
                </label>

                <label>
                    <input type="text" class="sis-form" size="6" name="n" placeholder="Nº" title="Numero:" />
                </label>                

                <label>
                    <input type="text" class="sis-form" size="60" name="complemento" placeholder="Complemento:" title="Complemento:"/>
                </label>

                <label>
                    <input type="text" class="sis-form" size="43" name="bairro"  id="bairro" placeholder="Bairro:" title="Bairro:"/>
                </label>

                <label>

                    <input type="text" class="sis-form"  size="60" name="cidade" id="cidade" placeholder="Cidade:" title="Cidade:"/>
                </label>

                <label>
                    <input type="text" class="sis-form" size="5" name="uf" id="uf" placeholder="Uf:" title="Uf:" size="2"/>
                </label>

                <label>
                    <input class="sis-form" name="ibge" size="5" id="ibge" type="text" placeholder="Ibge:" />
                </label>

                <label>
                    <button type="submit" name="cad-fornecedor" class="sis-btn-verde">SALVAR <i class="fa fa-floppy"></i></button>
                </label>
            </div>

            <footer class="box-100">

                </form>	               
            </footer>
        </article>
        
         <!-- 
                      ####################################
                      ####### PLANOS CADASTRADOS ########
                      ####################################
        -->         
        <div class="box-100 painel-padrao nav-title bg-silver">
            <h3 class="fcolor_branco"><i class="fa fa-user" aria-hidden="true"></i> Fornecedores Cadastrados:</h3>           
        </div>  
        <article class="painel-header itens box-100">        
            <table class="sis-table box-100">
                <?php foreach ($Fornecedor->findAll() as $key => $buscarFornecedores): ?>
                    <tr>        
                        <td><?= $buscarFornecedores->nome_fantasia; ?></td>
                        <td><?= $buscarFornecedores->cnpj; ?></td>
                        <td><?= $buscarFornecedores->email; ?></td>  
                        <td><?= $buscarFornecedores->tel; ?></td>  
                        <td><?= $buscarFornecedores->cel; ?></td>  
                    </tr>
                <?php endforeach; ?>


            </table>          
        </article>


        <div class="clear"></div>
    </div>
</section>
<?php require_once ('footer.php'); ?>
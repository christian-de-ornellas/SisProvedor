<?php include_once('header.php'); ?> 	
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>  
<section class="container">
    <div class="content">        
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-user" aria-hidden="true"></i> Cadastrar Cliente</h3>
            <ul>
                <li><a href="cadastrar-cliente">Novo Cliente /</a></li>
                <li><a href="consultar-cliente">Consultar /</a></li>
                <li><a href="cadastrar-plano">Criar Acesso</a></li>                      
            </ul> 
        </div>      
        <article class="painel-header box-100 widget" id="tabs">
            <header class="bg_orange"></header>
            <ul>
                <li><a href="#tabs-1">Dados</a></li>
                <li><a href="#tabs-2">Endereço</a></li>
                <li><a href="#tabs-3">Conexão</a></li>
                <li><a href="#tabs-4">Financeiro</a></li>
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- Dados Gerais -->
                    <label>
                        <label for="radio-1">Pessoa Física</label>
                        <input type="radio" name="radio-1" id="radio-1">
                        <label for="radio-2">Pessoa Jurídica</label>
                        <input type="radio" name="radio-1" id="radio-2">                   
                    </label><br/><br/>

                    <input type="text" class="sis-form" size="32" name="razaosocial" placeholder="Razão social: " title="Razão social: "/>


                    <input type="text" class="sis-form" size="32" name="fantasia" placeholder="Nome fantasia: " title="Nome fantasia: "/>


                    <input type="text" class="sis-form"size="13" name="cnpj" id="cnpj"placeholder="Cnpj: " title="Cnpj: "/>


                    <input type="text" class="sis-form" size="15" name="ie" placeholder="Estadual:" title="Informe o nome"/>

                    <input type="text" class="sis-form" size="85" name="nome" placeholder="Nome completo:" title="Informe o nome"/>

                    <select class="sis-form" name="sexo">
                        <option value="">Sexo</option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                    <input type="text" class="sis-form" size="6" name="nasc"  id="nasc" placeholder="Nasc:" title="Informe a data de nascimento!" />

                    <input type="text" class="sis-form" size="11" name="cpf" id="cpf" placeholder="Cpf:" required title="Informe o número do CPF!" />

                    <input type="text" class="sis-form" size="9"name="rg" id="rg" placeholder="Rg:" title="Infome o número de RG!"/>

                    <input type="email" class="sis-form" size="32" name="email" placeholder="E-mail:" title="Informe um e-mail válido!"/>

                    <input type="tel" class="sis-form" size="9" name="tel" id="tel" placeholder="Tel 01:" title="Informe um número de telefone fixo!"/>

                    <input type="tel" class="sis-form" size="9" name="cel" id="cel" placeholder="Tel 02:" title="Informe um número de celular!"/>

                    <input type="tel" class="sis-form" size="9"name="cel" id="cel" placeholder="Tel 03:" title="Informe um número de celular!"/>

                    <textarea rows="3"class="sis-form box-100" placeholder="Observação:"></textarea>

            </div> 
            <!-- Localização --> 
            <div id="tabs-2">
                <input type="text" class="sis-form" size="6" name="cep" id="cep" placeholder="Cep:" title="Informe o cep de sua cidade!" size="10" maxlength="9"
                       onblur="pesquisacep(this.value);"/>

                <input type="text" class="sis-form" size="85" name="rua" id="rua" placeholder="Rua:" title="Informe o nome da rua!" size="60" />


                <input type="text" class="sis-form" size="6" name="n" placeholder="Nº" title="Informe o número da localidade!" />

                <input type="text" class="sis-form" size="60" name="complemento" placeholder="Complemento:" title="Informe um complemento!"/>

                <input type="text" class="sis-form" size="43" name="bairro"  id="bairro" placeholder="Bairro:" title="Informe o bairro!"/>


                <input type="text" class="sis-form"  size="60" name="cidade" id="cidade" placeholder="Cidade:" title="Informe a cidade!"/>


                <input type="text" class="sis-form" size="5" name="uf" id="uf" placeholder="Uf:" title="Informe a sigla do seu estado!" size="2"/>


                <input class="sis-form" name="ibge" size="5" id="ibge" type="text" placeholder="Ibge:" />

            </div>
            <!-- Conexão -->
            <div id="tabs-3">                         
                <label for="radio-3">Hotspot</label>
                <input type="radio" name="radio-1" id="radio-3">
                <label for="radio-4">Pppoe</label>
                <input type="radio" name="radio-1" id="radio-4">
                <br/>               
                <label><small>Login:</small>
                    <input type="text" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><small>Senha:</small>
                    <input type="password" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><small>Repetir Senha:</small>
                    <input type="password" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><br />
                    <small>Pegar Ip:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-2">Não
                </label>
                <label><small>IP:</small><br/>
                    <input type="text" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><br />
                    <small>Pegar Mac:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-2">Não
                </label>
                <label><small>Mac:</small><br/>
                    <input type="text" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><small>Interface:</small><br/>
                    <input type="text" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><small>IP Fallback:</small><br/>
                    <input type="text" class="sis-form" name="nome" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                </label>
                <label><small>SSIDE:</small><br/>
                    <select>
                        <option></option>
                        <option>BASE 0</option>
                    </select>
                </label>
                <label><small>RAMAL:</small><br/>
                    <select>
                        <option></option>
                        <option>CENTRAL</option>
                    </select>
                </label>
                <label><small>PLANO:</small><br/>
                    <select>
                        <option></option>
                        <option>65MEGA</option>
                    </select>
                </label>
                <label><small>PLANO 15:</small><br/>
                    <select>
                        <option></option>
                        <option>NENHUM</option>
                    </select>
                </label>               
                <label><small>Limite de trafego:</small><br/>
                    <select>
                        <option></option>
                        <option>NENHUM</option>
                    </select>
                </label>                
                <label><small>Plano Down de trafego:</small><br/>
                    <select>
                        <option></option>
                        <option>NENHUM</option>
                    </select>
                </label>
                <label><small>Tabela de segurança:</small><br/>
                    <select>
                        <option></option>
                        <option>NENHUM</option>
                    </select>
                </label><br/><br/>
                <p>Rede sem fio</p>
                <hr/>
                <label><br />
                    <small>Acesso List:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-2">Não
                </label>
                <label><br />
                    <small>Criptografia:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Nenhuma
                    <input type="radio" name="radio-3" id="radio-2">Wep
                    <input type="radio" name="radio-3" id="radio-2">Wpa
                    <input type="radio" name="radio-3" id="radio-2">Eap
                </label>                
                <input type="text" class="sis-form" name="nome" placeholder="18/03/2016: " title="Nome fantasia: "/>              
                <!-- AQUI ELE ASSOCIA O EQUIPAMENTO E MAC AO CLIENTE -->
                <input type="hidden" name="equipamentocomodato">
                <input type="hidden" name="mac">
            </div>
            <!-- FINANCEIRO  -->
            <div id="tabs-4">
                <label><br />
                    <small>Vencimento:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">5
                    <input type="radio" name="radio-3" id="radio-1">10                 
                    <input type="radio" name="radio-3" id="radio-1">15
                    <input type="radio" name="radio-3" id="radio-1">25                 
                </label><br/>
                <label><br />
                    <small>Isento de mensalidade:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-1">Não                  
                </label><br/>
                <label><br />
                    <small>Recebe NF-S:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-1">Não                  
                </label><br />
                <label><br />
                    <small>Pagina de corte:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-1">Não                  
                </label><br />
                <label><br />
                    <small>Aviso de atraso:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-1">Não                  
                </label><br />
                <label><br />
                    <small>Aviso de atraso:</small> &nbsp;
                    <input type="radio" name="radio-3" id="radio-1">Sim
                    <input type="radio" name="radio-3" id="radio-1">Não                  
                </label><br />
                <label><br />
                    <small>Remover observação:</small> &nbsp;
                    <input type="number" min="1" max="30"> dias                
                </label><br />
                <!-- LEITURA DE CONFIGURAÇÕES -->
                <label><br />
                    <small>Conta:</small> &nbsp;
                    <select>
                        <option>...</option>
                        <option>CAIXA</option>
                        <option>ITAÚ</option>
                    </select>             
                </label><br />
                <!-- LEITURA DE CONFIGURAÇÕES -->
                <label><br />
                    <small>Taxa de adesão:</small> &nbsp;
                    <select>
                        <option>...</option>
                        <option>R$ 15,00</option>
                        <option>R$ 25,00</option>
                    </select>             
                </label><br />
                <label><br />
                    <!-- LEITURA DE CONFIGURAÇÕES -->
                    <small>Serviços:</small> &nbsp;
                    <select>
                        <option>...</option>
                        <option>Firewall</option>
                        <option>Anti-vírus</option>
                    </select>             
                </label><br />
            </div>
            <footer class="box-100">
                <button type="reset" name="" class="sis-btn-vermelho box-20">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="sis-btn-verde box-20">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <button type="submit" name="next" class="sis-btn-verde box-20">PRÓXIMO <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </form>	               
            </footer>
        </article>
    </div>
    <div class="clear"></div>
</section>
<?php include_once('footer.php'); ?>
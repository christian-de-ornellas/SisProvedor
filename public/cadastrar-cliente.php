<?php include_once('header.php'); ?> 	
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>  

<section class="container">
    <div class="content">
        <!-- 
                         ###########################
                              MENU DE INTERAÇÃO
                         ###########################
        -->        
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-user" aria-hidden="true"></i> Cadastrar Cliente</h3>
            <ul>
                <li><a href="cadastrar-cliente">Novo Cliente /</a></li>
                <li><a href="consultar-cliente">Consultar /</a></li>
                <li><a href="cadastrar-plano">Criar Acesso</a></li>                      
            </ul> 
        </div> 
        <!-- 
                         ####################################
                            DADOS PARA INSERIR NA RADCLIENTS
                         ####################################
        -->
        <article class="painel-header box-100" id="tabs">
            <header class="bg_orange"></header>
            <ul>
                <li><a href="#tabs-1">Dados</a></li>
                <li><a href="#tabs-2">Endereço</a></li>
                <li><a href="#tabs-3">Conexão</a></li>
                <li><a href="#tabs-4">Financeiro</a></li>

            </ul>
            <!-- 
                 ###########################
                      INFORMAÇÕES GERAIS
                 ###########################
            -->
            <div id="tabs-1">
                <form  method="post">
                    <!-- 
                   ###########################
                        TIPO DE CLIENTE
                   ###########################
                    -->
                    <label>
                        <label for="radio-1">Pessoa Física</label>
                        <input type="radio" name="tipo" class="pf" id="radio-1" value="pf" />
                        <label for="radio-2">Pessoa Jurídica</label>
                        <input type="radio" name="tipo" class="pj" id="radio-2"value="pf" />                                                          
                    </label>
                    <!-- 
                  ###########################
                       PESSOA JURÍDICA
                  ###########################
                    -->
                    <div id="pj">
                        <label>
                            <input type="text" class="sis-form box-30"  name="razaosocial" placeholder="Razão social: " title="Razão social: "/>
                        </label>

                        <label>
                            <input type="text" class="sis-form box-30" name="fantasia" placeholder="Nome fantasia: " title="Nome fantasia: "/>
                        </label>

                        <label>
                            <input type="text" class="sis-form box-20" name="cnpj" id="cnpj"placeholder="Cnpj: " title="Cnpj: "/>
                        </label>

                        <label>
                            <input type="text" class="sis-form box-20" name="ie" placeholder="Estadual:" title="Inscrição estadual:" />
                        </label>
                    </div>
                    <!-- 
                  ###########################
                       PESSOA FÍSICA
                  ###########################
                    -->
                    <div id="pf">                        
                        <label>
                            <input type="text" class="sis-form box-70" name="nome" placeholder="Nome completo:" title="Nome:"/>
                        </label>

                        <label> 
                            <select class="sis-form box-20" name="sexo" title="Genero:">
                                <option value="">Genero</option>
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select>
                        </label>

                        <label>
                            <input type="text" class="sis-form box-10" name="nasc"  id="nasc" placeholder="Nasc:" title="Data de nascimento:" />
                        </label>

                        <label>
                            <input type="text" class="sis-form box-15"  name="cpf" id="cpf" placeholder="Cpf:" required title="CPF:" />
                        </label>

                        <label>
                            <input type="text" class="sis-form box-15" name="rg" id="rg" placeholder="Rg:" title="RG:"/>
                        </label>
                    </div>

                    <label>
                        <input type="email" class="sis-form box-30" name="email" placeholder="E-mail:" title="E-mail:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form box-15"  name="tel" id="tel" placeholder="Telefone fixo:" title="Telefone fixo:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form box-15"  name="cel" id="cel" placeholder="Celular:" title="Celular:"/>
                    </label>

                    <label>
                        <input type="tel" class="sis-form box-15" name="cel" id="cel" placeholder="Celular opcional:" title="Celular opcional:"/>
                    </label>

                    <label>
                        <textarea rows="3"class="sis-form box-100" placeholder="Observação:" title="Observação:"></textarea>
                    </label>
                    <!-- 
                                     ###########################
                                         BOTÕES DE NAVEGAÇÃO
                                     ###########################
                    -->
                    <label>
                        <ul class="box100">                                          
                            <li><a id="prox" class="box20 sis-btn-verde">Continuar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </label>
            </div> 
            <!-- 
                  ###########################
                      DADOS DE LOCALIZAÇÃO
                  ###########################
            -->
            <div id="tabs-2">
                <label>
                    <input type="text" class="sis-form box-20" name="cep" id="cep" placeholder="Cep:" title="Cep:" maxlength="9"
                           onblur="pesquisacep(this.value);"/>
                </label>

                <label>
                    <input type="text" class="sis-form box-70" name="rua" id="rua" placeholder="Rua:" title="Rua:" />
                </label>

                <label>
                    <input type="text" class="sis-form box-10" name="n" placeholder="Nº" title="Número:" />
                </label>

                <label>
                    <input type="text" class="sis-form box-50" name="complemento" placeholder="Complemento:" title="Complemento:"/>
                </label>

                <label>
                    <input type="text" class="sis-form box-50" name="bairro"  id="bairro" placeholder="Bairro:" title="Bairro:"/>
                </label>

                <label>
                    <input type="text" class="sis-form box-70" name="cidade" id="cidade" placeholder="Cidade:" title="Cidade:"/>
                </label>

                <label>
                    <input type="text" class="sis-form box-15" name="uf" id="uf" placeholder="Uf:" title="UF:" />
                </label>
                <label>
                    <input class="sis-form box-15" name="ibge"  id="ibge" type="text" placeholder="Ibge:" /> 
                </label>
                <!-- 
                                                    ###########################
                                                        BOTÕES DE NAVEGAÇÃO
                                                    ###########################
                -->
                <label  class="box100">
                    <ul>             
                        <li><a id="ant" class="box20 sis-btn-verde"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Anterior</a></li>
                        <li><a id="prox2" class="box20 sis-btn-verde">Continuar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </label>
            </div>
            <!-- 
                   ###########################
                         DADOS DE CONEXÃO
                   ###########################
            -->
            <div id="tabs-3">  

                <!-- 
                  ###########################
                       TIPO DE CONEXÃO
                  ###########################
                -->

                <label>
                    <select class="sis-form box-20" title="Tipo de conexão:">
                        <option value="0">Tipo de conexão</option>
                        <option value="hotspot">Hotspot</option>
                        <option value="Pppoe">Pppoe</option>
                    </select>
                </label>

                <label>
                    <input type="text" class="sis-form box-20" name="login" placeholder="Login: " title="Login: "/>
                </label>
                <label>
                    <input type="password" class="sis-form box-20" name="senha" placeholder="Senha: " title="Senha: "/>
                </label>
                <label>
                    <input type="password" class="sis-form box-20" name="repetir_senha" placeholder="Repetir Senha: " title="Repetir Senha: "/>
                </label>

                <label>
                    <select class="sis-form box-20" title="Configurar o IP:">
                        <option value="0">Pegar IP</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </label>

                <label>
                    <input type="text" class="sis-form box-30" name="ip"  placeholder="Ip: " title="Ip: "/>
                </label>

                <label>
                    <select class="sis-form box-20" title="Configurar o MAC:">
                        <option value="0">Pegar MAC</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </label>

                <label>
                    <input type="text" class="sis-form box-30" name="mac" placeholder="MAC:" title="MAC: "/>
                </label>

                <label>
                    <input type="text" class="sis-form box-20" name="interface" placeholder="Interface: " title="Interface: "/>
                </label>

                <label>
                    <input type="text" class="sis-form box-20" name="ip_fallback" placeholder="IP Fallback: " title="IP Fallback: "/>
                </label>

                <label>
                    <select class="sis-form box-20" title="SSIDE:">
                        <option value="0">SSIDE</option>
                        <option value="B0">Base 0</option>                      
                    </select>
                </label>

                <label>
                    <select class="sis-form box-20" name="ramal" title="Ramal:">
                        <option value="0">RAMAL</option>
                        <option>CENTRAL</option>
                    </select>
                </label>

                <label>
                    <select class="sis-form box-20" name="plano" title="Plano:">
                        <option value="0">Plano</option>
                        <option>65MEGA</option>
                    </select>
                </label>

                <label>
                    <select class="sis-form box-20" name="plano15" title="plano15:">
                        <option value="0">Plano 15</option>
                        <option>Nenhum</option>
                    </select>
                </label>

                <label>                   
                    <select class="sis-form box-20" name="limite_trafego" title="Limite de trafego:">
                        <option value="0">Limite de trafego</option>
                        <option>NENHUM</option>
                    </select>
                </label>                

                <label>
                    <select class="sis-form box-20" name="Plano_down_trafego" title="Plano Down de trafego:">
                        <option value="0">Plano Down de trafego:</option>
                        <option>NENHUM</option>
                    </select>
                </label>

                <label>
                    <select class="sis-form box-20" name="tabela_de_seguranca" title="Tabela de segurança:">
                        <option value="0">Tabela de segurança:</option>
                        <option>NENHUM</option>
                    </select>
                </label>

                <label>
                    <button type="button" title="Um clique para habilitar e dois cliques para desabilitar" class="sis-btn-vermelho box-100" id="habilita">Rede sem fio <i class="fa fa-rss"></i></button>
                    <!--
                    <button type="button" class="sis-btn-verde box-50" id="habilita">Habilitar Rede sem fio</button>
                    <button type="button" class="sis-btn-vermelho box-50" id="desabilita">Desabilitar Rede sem fio</button>-->
                </label>

                <div id="rede">
                    <label>
                        <select class="sis-form box-35" name="acesso_list" title="Acesso list:">
                            <option value="0">Acesso list:</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </label>                

                    <label>
                        <select class="sis-form box-35" name="acesso_list" title="Acesso list:">
                            <option value="0">Criptografia:</option>
                            <option>Nenhuma</option>
                            <option>Wep</option>
                            <option>Wpa</option>
                            <option>Eap</option>
                        </select>
                    </label>

                    <label>
                        <input type="date" class="sis-form box-25" name="data" placeholder="Data: " title="Data: "/>
                    </label>

                    <!-- AQUI ELE ASSOCIA O EQUIPAMENTO E MAC AO CLIENTE -->
                    <input type="hidden" name="equipamentocomodato">
                    <input type="hidden" name="mac">
                </div><br/>
                <!-- 
                                    ###########################
                                        BOTÕES DE NAVEGAÇÃO
                                    ###########################
                -->
                <label class="box100">
                    <ul>                              
                        <li><a id="ant2" class="box20 sis-btn-verde"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Anterior</a></li>
                        <li><a id="prox3" class="box20 sis-btn-verde">Continuar <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </label>
            </div>
            <!-- 
                   ###########################
                        DADOS FINANCEIRO
                   ###########################
            -->
            <div id="tabs-4">                                
                <label>
                    <select class="sis-form" name="vencimento" title="Vencimento:">
                        <option value="0">Vencimento:</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                    </select>
                </label>

                <label>
                    <select class="sis-form" name="isento" title="Isento de mensalidade:">
                        <option value="0">Isento de mensalidade</option>
                        <option>Sim</option>
                        <option>Não</option>                           
                    </select>
                </label>

                <label>
                    <select class="sis-form" name="nota_fiscal" title="Receber nota fiscal:">
                        <option value="0">Receber nota fiscal</option>
                        <option>Sim</option>
                        <option>Não</option>                           
                    </select>
                </label>

                <label>
                    <select class="sis-form" name="pag_corte" title="Pagina de corte:">
                        <option value="0">Pagina de corte</option>
                        <option>Sim</option>
                        <option>Não</option>                           
                    </select>
                </label>

                <label>
                    <select class="sis-form" name="aviso_atraso" title="Aviso de atraso:">
                        <option value="0">Aviso de atraso</option>
                        <option>Sim</option>
                        <option>Não</option>                           
                    </select>
                </label>

                <label>
                    <select class="sis-form" name="remover_obs" title="Remover observação:">
                        <option value="0">Remover observação</option>
                        <option>Sim</option>
                        <option>Não</option>                           
                    </select>
                </label>
                <!-- LEITURA DE CONFIGURAÇÕES -->
                <label>
                    <select class="sis-form" name="conta" title="Conta:">
                        <option value="0">Conta</option>
                        <option>CAIXA</option>
                        <option>ITAÚ</option>                         
                    </select>
                </label>
                <!-- LEITURA DE CONFIGURAÇÕES -->
                <label>
                    <select class="sis-form" name="taxa_adesao" title="Taxa de adesão:">
                        <option value="0">Taxa de adesão</option>
                        <option>R$ 15,00</option>
                        <option>R$ 25,00</option>                        
                    </select>
                </label>
                <!-- LEITURA DE CONFIGURAÇÕES -->
                <label>
                    <select class="sis-form" name="servicos" title="Serviços:">
                        <option value="0">Serviços</option>
                        <option>Firewall</option>
                        <option>Anti-vírus</option>                       
                    </select>
                </label>    

                <label>                                                                                                                         
                    <ul class="box100">                                          
                        <li><a id="ant3" class="box20 sis-btn-verde"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Anterior</a></li>
                        <li><button type="button" name="salvar" class="sis-btn-verde box-20">Salvar <i class="fa fa-plus" aria-hidden="true"></i></button></li>
                    </ul> 
                </label>
            </div>           
            </form>	                          
        </article>
    </div>
    <div class="clear"></div>
</section>
<?php include_once('footer.php'); ?>
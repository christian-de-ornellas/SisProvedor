<?php require_once ('header.php'); ?>
<div class="container">
    <div class="content">		
        <article class="main_panel widget" id="tabs">
            <header>
                <p  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"><i class="fa fa-bell" aria-hidden="true"></i>
                    Cadastrar Chamado</p>
            </header>
            <ul>
                <li><a href="#tabs-1">Novo chamado</a></li>
                <li><a href="#tabs-2">Consultar chamados</a></li>                
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- Dados Gerais -->
                    <label>
                        <small>Atendente: Cristiano Santos</small>                  
                    </label><br/>

                    <label><small>Nome do Cliente:</small>
                        <input type="text" class="form-100" size="32" name="razaosocial" placeholder="Nome do cliente: " title="Cliente: "/>
                    </label><br/> 
                    <label>
                        <small>Protocolo de chamado: 25092016175020</small>                  
                    </label><br/>
                    <label>
                        <small>Data da abertura: 23/09/2016 00:25:02</small>                  
                    </label><br/>
                    <label>
                        <!-- Aqui vai calcular 48horas depois da data de abertura --->
                        <small>Tempo para atendimento:</small>
                        <input type="radio" value="12 horas">12 horas
                        <input type="radio" value="12 horas">24 horas
                        <input type="radio" value="12 horas">48 horas
                        <input type="radio" value="12 horas">72 horas
                        <input type="radio" value="12 horas">96 horas
                    </label><br/>
                    <label>
                        <!-- Aqui vai calcular 48horas depois da data de abertura --->
                        <small>Data da visita:</small>
                        <input type="text" class="form-50" size="30"value="23/09/2016 00:25:02" />
                    </label><br/>
                    <label>                  
                        <small>Prioridade:</small>
                        <select class="form-100">
                            <option></option>
                            <option>Baixa</option>
                            <option>Normal</option>
                            <option>Alta</option>
                        </select>
                    </label><br/>
                    <label>                  
                        <small>Setor:</small>
                        <select class="form-100">
                            <option></option>
                            <option>Vila Norma</option>
                            <option>Vila São João</option>
                            <option>Iraja</option>
                        </select>
                    </label><br/>  
                    <label>
                        <small>Descrição do problema:</small>
                        <textarea rows="2" cols="80" class="form-100"></textarea>
                    </label>      
                    <div class="itens">
                        <table>
                            <tr>
                                <th><strong>Data e Hora</strong></th>
                                <th><strong>Ramal</strong></th>
                                <th><strong>Descrição</strong></th>
                                <th><strong>Chamado</strong></th>
                                <th><strong>Ação</strong></th>

                            </tr>
                            <tr>
                                <td><strong>30/07/2016 20:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Aberto</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>

                        </table>
                    </div><br /><br /><br />
                    <!--HISTORICO DE CHAMADOS DO BAIRRO-->
                    <div class="itens">
                        <table>
                            <tr>
                                <th><strong>Data e Hora</strong></th>
                                <th><strong>Ramal</strong></th>
                                <th><strong>Descrição</strong></th>
                                <th><strong>Chamado</strong></th>
                                <th><strong>Ação</strong></th>

                            </tr>
                            <tr>
                                <td><strong>30/07/2016 20:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Aberto</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                            <tr>
                                <td><strong>30/06/2016 10:00</strong></td>
                                <td>BASE 01</td>                                
                                <td>Problemas com o roteador</td>
                                <td>Fechado</td>
                                <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                            </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>
                                <tr>
                                    <td><strong>30/06/2016 10:00</strong></td>
                                    <td>BASE 01</td>                                
                                    <td>Problemas com o roteador</td>
                                    <td>Fechado</td>
                                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                                </tr>

                        </table>
                    </div>
            </div>          
            <div id="tabs-2">
                <label for="radio-1">Abertos</label>
                <input type="radio" name="radio-1" id="radio-1">
                <label for="radio-2">Fechados</label>
                <input type="radio" name="radio-1" id="radio-2">   
                <table><td><input type="search" class="form-100" placeholder="Procurar por..."></td><td><select class="form-100"><option>Filtro</option><option>Nome</option><option>Sobrenome</option><option>Cidade</option></select><td><button type="submit">Buscar</button></td></table>

            </div>
            <footer>
                <button type="reset" name="" class="btn">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="btn">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <button type="submit" name="next" class="btn">PRÓXIMO <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </form>	               
            </footer>
        </article>
    </div>
    <div class="clear"></div>
</div>
<?php require_once ('footer.php'); ?>
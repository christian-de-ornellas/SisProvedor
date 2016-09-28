<?php require_once ('header.php'); ?>
<section class="container">
    <div class="content">
        <article class="main_panel widget" id="tabs">
            <header>
                <p  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                    Cadastrar produto</p>
            </header>
            <ul>                
                <li><a href="#tabs-1">Produto</a></li>
                <li><a href="#tabs-2">Valor</a></li>
            </ul>
            <div id="tabs-1">
                <form method="post">
                    <!-- FORNCEDORES DB -->
                    <label>
                        <small>Fornecedores:</small><br />
                        <select name="" class="form-100">
                            <option value="0">....</option>
                            <option value="3s roter">3s roter</option>
                            <option value="3s roter">3s fibra</option>
                            <option value="3s roter">3s computer</option>
                        </select>
                    </label>
                    <label>
                        <small>Nº Nota fiscal:</small><br />
                        <input type="text" title="" class="form-100" placeholder="NF-s..."/>
                    </label>
                    <label>
                        <small>Data de compra:</small><br />
                        <input type="text" title="" class="form-75" placeholder="Ex:22/02/2001"/>
                    </label>

                    <label>
                        <small>Nome:</small><br />
                        <input type="text" title="" class="form-100" placeholder="Produto..."/>
                    </label>

                    <label>
                        <small>Nº Série:</small><br />
                        <input type="text" title="" class="form-100" placeholder="Código..."/>
                    </label>

                    <label>
                        <small>Estoque:</small><br />
                        <input type="number" class="form-25" title="" placeholder="10" min="1"/>
                    </label>                     
                    <label>
                        <small>Peso:</small><br />
                        <input type="text" class="form-25" title="" placeholder="10" min="1"/>
                    </label>                     
                    <label>
                        <small>Medida:</small><br />
                        <input type="text" class="form-50" title="" placeholder="Altura" min="1"/>
                        <input type="text" class="form-50" title="" placeholder="Largura" min="1"/>
                        <input type="text" class="form-50" title="" placeholder="Profundidade" min="1"/>
                    </label>                     
                    <label>
                        <small>Descrição</small>
                        <textarea rows="2" cols="80" class="form-100">
                            
                        </textarea>
                    </label>                     
                    <br /><br />
                    <strong>Itens:</strong>
                    <div class="itens">
                        <table>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>02</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Tp-link</td>
                                <td>00211515550</td>
                                <td>0001</td>
                            </tr>
                        </table>
                    </div>
            </div>

            <div id="tabs-2">
                <label><small>Preço:</small>
                    <input type="text" class="form-100" name="ipi"  placeholder="Preço" title="Informe o cep de sua cidade!" size="10"/>
                </label>
                <label><small>IPI:</small>
                    <input type="text" class="form-100" name="ipi"  placeholder="IPI" title="Informe o cep de sua cidade!" size="10"/>
                </label>
                <label><small>ICMS:</small>
                    <input type="text" class="form-100" name="ipi"  placeholder="ICMS" title="Informe o cep de sua cidade!" size="10"/>
                </label>
               
            </div>
            <footer>
                <button type="reset" name="" class="btn">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="btn" title="Salvar seleção de produtos">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <button type="submit" name="next" class="btn">PRÓXIMO <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </form>	               
            </footer>
        </article>
        <div class="clear"></div>
    </div>
</section>
<?php require_once ('footer.php'); ?>
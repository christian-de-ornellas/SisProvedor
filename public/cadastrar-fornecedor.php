<?php require_once ('header.php'); ?>
<section class="container">
    <div class="content">
        <article class="main_panel widget" id="tabs">
            <header>
                <p  title="Aqui você registra o novo cliente" alt="[Aqui você registra um novo cliente]"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                    Cadastrar fornecedor</p>
            </header>
            <ul>                
                <li><a href="#tabs-1">Dados Comercias</a></li>
                <li><a href="#tabs-2">Localidade</a></li>
            </ul>
            <div id="tabs-1">
                <form method="post">

                    <label><small>Razão Social:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Razão Social..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Nome Fantasia:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Nome Fantasia..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Contato:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Contato..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Cnpj:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="CNPJ..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Ie:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Inscrição Estadual..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>E-mail:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="E-mail..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Tel 01:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Tel 01..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Tel 02:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Tel 02..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>
                    <label><small>Tel 03:</small>
                        <input type="text" size="100" class="form-100" name="ipi"  placeholder="Tel 03..." title="Informe o cep de sua cidade!" size="10"/>
                    </label>

            </div>

            <div id="tabs-2">
                 <label><small>Cep:</small>
                    <input type="text" class="form-100" size="2" name="cep" id="cep" placeholder="00000-000" title="Informe o cep de sua cidade!" size="10" maxlength="9"
                           onblur="pesquisacep(this.value);"/>
                </label>
                <label><small>Rua:</small>
                    <input type="text" class="form-100" size="69" name="rua" id="rua" placeholder="Ex: Av. são geraldo luis" title="Informe o nome da rua!" size="60" />
                </label>
                <label><small>Nº</small>
                    <input type="text" class="form-100" size="1" name="n" placeholder="Ex: 1002" title="Informe o número da localidade!" />
                </label>
                <label><small>Complemento:</small>
                    <input type="text" class="form-100" size="42" name="complemento" placeholder=" Ex: Apt 01, próximo a light" title="Informe um complemento!"/>
                </label>
                <label><small>Bairro:</small>
                    <input type="text" class="form-100" size="29" name="bairro"  id="bairro" placeholder="Ex: Vilar dos Teles" title="Informe o bairro!" size="40"/>
                </label>
                <label><small>Cidade</small>
                    <input type="text" class="form-100" name="cidade" id="cidade" placeholder="Ex: São João de Meriti" title="Informe a cidade!" size="40"/>
                </label>
                <label><small>Uf:</small>
                    <input type="text" class="form-100" size="1" name="uf" id="uf" placeholder="Ex: RJ" title="Informe a sigla do seu estado!" size="2"/>
                </label>
                <label><small>Ibge:</small>
                    <input class="form-100" name="ibge" size="1" id="ibge" type="text" placeholder="Ex: 9999" />
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
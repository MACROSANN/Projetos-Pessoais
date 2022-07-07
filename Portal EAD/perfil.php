<!--Home-->
<div class="caixa">
        <h2 class="titulo"><span class="case"><i class="ico perfil"></i>Meus Perfil</span>Editar e Alterar dados do Perfil</h2>
</div>
<div class="base-home">
        <div class="rows perfil">
                <div class="caixa">
                        <form action="" method="">
                                <fieldset class="alt-mob">
                                        <legend>Dados do Cadastro</legend>
                                        <div class="rows">
                                                <div class="cel4">
                                                        <label>Foto do perfil</label>
                                                        <div class="thumb">
                                                                <img src="img/img-usuario.png">
                                                                <input type="file" name="" value="">
                                                        </div>
                                                        <small>Tamanho máximo da imagem: 220px autura x 220 largura</small> 
                                                </div>
                                                <div class="cel6">
                                                        <div class="cel12">
                                                                <label>Nome</label>
                                                                <input type="text" required="required" name="" pattern="[a-z\s]+$" placeholder="Ex. joão josé silva">
                                                        </div>
                                                        <div class="cel12">
                                                                <label>Email</label>
                                                                <input type="email" required="required" class="input-text" name="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="ex. qualquer@coisa">
                                                        </div>
                                                        <div class="cel12">
                                                                <label>Senha</label>
                                                                <input type="password" required="required" name="" placeholder="ex. maior que oito dígitos">
                                                        </div>
                                                </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                        <legend>Dados do Pessoais</legend>
                                        <div class="rows">
                                                <div class="cel3">
                                                        <label>CPF</label>
                                                        <input type="text" name="" placeholder="Ex. 999.999.999-99">
                                                </div>
                                                <div class="cel3">
                                                        <label>Nascimento</label>
                                                        <input type="date" required="required" maxlength="10" name="" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1960-01-01" max="2002-12-31">
                                                </div>
                                                <div class="cel3">
                                                        <label>Telefone</label>
                                                        <input type="tel" required="required" maxlength="15" name="" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="ex.(99) 99999-9999">
                                                </div>
                                                <div class="cel3">
                                                        <label>Profissão</label>
                                                        <input type="text" name="" placeholder="ex. administrador">
                                                </div>
                                        </div>
                                </fieldset>
                                <fieldset>
                                        <legend>Endereço</legend>
                                        <div class="rows">
                                                <div class="cel2">
                                                        <label>CEP</label>
                                                        <input type="text" name="" placeholder="ex. 99.999-999">
                                                </div>
                                                <div class="cel8">
                                                        <label>Endereço</label>
                                                        <input type="text" name="" placeholder="ex. avenida/travessa ou rua">
                                                </div>
                                                <div class="cel1">
                                                        <label>Número</label>
                                                        <input type="number" name="">
                                                </div>
                                        </div>
                                        <div class="rows">
                                                <div class="cel6">
                                                        <label>Complemento</label>
                                                        <input type="text" name="" placeholder="ex. andar, apartamento ou sala">
                                                </div>
                                                <div class="cel3">
                                                        <label>Bairro</label>
                                                        <input type="text" name="" placeholder="ex. soledade">
                                                </div>
                                                <div class="cel1">
                                                        <label>Estado</label>
                                                        <input type="text" name="">
                                                </div>
                                                <div class="cel2">
                                                        <label>Cidade</label>
                                                        <input type="text" name="" placeholder="ex. brasília">
                                                </div>
                                        </div>
                                </fieldset>
                                <input type="submit" value="Atualizar perfil" class="btn">
                        </form>
                </div>
        </div>
</div>

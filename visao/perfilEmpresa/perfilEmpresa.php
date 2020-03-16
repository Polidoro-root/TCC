<form class="form-signin">
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" id="inputNome"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Nome Completo" disabled>
        </div>
        <div class="my-3  col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <label for="inputNumero">Numero de Contato</label>
            <input type="tel" name="telefone" id="inputNumero"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Número de Contato" disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <label for="inputDtNascimento">CNPJ</label>
            <input type="text" name="dtNascimento" id="inputDtNascimento"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="CNPJ"
                disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" id="inputEmail"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Email"
                disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <label for="inputSenha">Senha</label>
            <input type="password" name="senha" id="inputSenha"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Senha"
                disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <label for="selectStatus">Status</label>
            <select name="status" class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" name="status"
                id="selectStatus" disabled>
                <option value="disponivel" selected>Disponível</option>
                <option value="indisponivel">Indisponível</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="my-3 mr-auto col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-12">
            <a class="btn btn-a col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" href="vagas.php">Vagas</a>
        </div>
        <div class="my-3  col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-12">
            <a class="btn btn-a col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                href="enderecosEmpresa.php">Endereços</a>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
            <a type="submit" class="btn btn-btn col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">Alterar
                Perfil</a>
        </div>

    </div>
</form>
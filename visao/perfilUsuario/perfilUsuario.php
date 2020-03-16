<form class="form-sigin">
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputNome">Nome Completo</label>
            <input type="text" name="nome" id="inputNome"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Nome Completo" disabled>
        </div>
        <div class="my-3  col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputNumero">Numero de Contato</label>
            <input type="tel" name="telefone" id="inputNumero"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Número de Contato" disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputDtNascimento">Data de Nascimento</label>
            <input type="date" name="dtNascimento" id="inputDtNascimento"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Data de Nascimento" disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" id="inputEmail"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Email"
                disabled>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputCEP" class="">CEP</label>
            <input type="text" name="cep" id="inputCEP"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="CEP"
                disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputLogradouro">Logradouro</label>
            <input type="text" name="logradouro" id="inputLogradouro"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Logradouro"
                disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputNumeroEndereco" class="">Número de Endereço</label>
            <input type="number" name="numero" id="inputNumeroEndereco"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Número de Endereço" disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputBairro">Bairro</label>
            <input type="text" name="bairro" id="inputBairro"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Bairro"
                disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputCidade">Cidade</label>
            <input type="text" name="cidade" id="inputCidade"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Cidade"
                disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="selectEstado">Estado</label>
            <select name="estado" class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" name="estado"
                id="selectEstado" disabled>
                <option value="al">AL</option>
                <option value="ap">AP</option>
                <option value="am">AM</option>
                <option value="ba">BA</option>
                <option value="ce">CE</option>
                <option value="df">DF</option>
                <option value="es">ES</option>
                <option value="go">GO</option>
                <option value="ma">MA</option>
                <option value="ms">MS</option>
                <option value="mt">MT</option>
                <option value="mg">MG</option>
                <option value="pa">PA</option>
                <option value="pb">PB</option>
                <option value="pr">PR</option>
                <option value="pe">PE</option>
                <option value="pi">PI</option>
                <option value="rj">RJ</option>
                <option value="rn">RN</option>
                <option value="ro">RO</option>
                <option value="rr">RR</option>
                <option value="rs">RS</option>
                <option value="sc">SC</option>
                <option value="sp" selected>SP</option>`
                <option value="to">TO</option>
                <option value="se">SE</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="selectGraduacao">Nível de Graduação</label>
            <select name="nivelGraduacao" class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" name="graduacao"
                id="selectGraduacao">
                <option value="incompleto">Incompleto</option>
                <option value="medio" selected>Ensino Médio</option>
                <option value="tecnico">Ensino Técnico</option>
                <option value="superior">Ensino Superior</option>
                <option value="especializacao">Especializado</option>
                <option value="mestrado">Mestrado</option>
                <option value="doutorado">Doutorado</option>
            </select>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputGraduacao">Graduação</label>
            <input type="text" name="graduacao" id="inputGraduacao"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Graduação"
                disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputAreaInteresse">Área de Interesse</label>
            <input type="text" name="areaInteresse" id="inputAreaInteresse"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Área"
                disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputExperiencia">Experiêcia na Área de Interesse</label>
            <input type="text" name="experienciaArea" id="inputExperiencia"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Experiência"
                disabled>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputUltimoEmprego">Último Emprego</label>
            <input type="text" name="ultimoEmprego" id="inputUltimoEmprego"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Último Emprego" disabled>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <label for="inputSobreVoce">Fale Sobre Você</label>
            <textarea id="inputSobreVoce" name="sobreVoce" class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                disabled></textarea>
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="my-3 mr-auto col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
            <a class="btn btn-a col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" href=".php">Currículo</a>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-12">
            <a type="submit" class="btn btn-btn col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12">Alterar
                Perfil</a>
        </div>

    </div>
</form>
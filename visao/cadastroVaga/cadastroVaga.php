<form class="form-signin">
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputVaga">Vaga</label>
            <input type="text" name="vaga" id="inputVaga"
                class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Vaga"
                required>
        </div>
        <div class="my-3  col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputSalario">Salário</label>
            <input type="number" name="salario" id="inputSalário"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Salário"
                required>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputCidade">Cidade</label>
            <input type="text" name="cidade" id="inputCidade"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" placeholder="Cidade"
                required>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="selectEstado">Estado</label>
            <select class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" name="estado"
                id="selectEstado">
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
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputHorarioEntrada">Horário de Entrada</label>
            <input type="time" name="horarioEntrada" id="inputHorarioEntrada"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Horário de Entrada" required>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputHorarioSaida">Horário de Saída</label>
            <input type="time" name="horarioSaida" id="inputHorarioSaida"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Horário de Saída" required>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputIdaAlmoco">Horário de Ida ao Almoço</label>
            <input type="time" name="horarioIdaAlmoco" id="inputIdaAlmoco"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Horário de Ida ao Almoço" required>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputVoltaAlmoco">Horário de Volta do Almoço</label>
            <input type="time" name="horarioVoltaAlmoco" id="inputVoltaAlmoco"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12"
                placeholder="Horário de Volta do Almoço" required>
        </div>
    </div>
    <div class="row">
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputBeneficios">Beneficios</label>
            <textarea name="beneficios" id="inputBeneficios"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" required></textarea>
        </div>
        <div class="my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-6">
            <label for="inputRequisitos">Requisitos</label>
            <textarea name="requisitos" id="inputRequisitos"
                class="form-control  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-12" required></textarea>
        </div>
    </div>
    <hr>
    <button class="texto btn btn-lg btn-block mb-3 mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-4"
        type="submit">Cadastrar</button>
</form>
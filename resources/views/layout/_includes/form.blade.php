<div class="input-field">
    <input type="text" name="curso_nome" id="" value="{{isset($registro->curso_nome) ? $registro->curso_nome  : '-' }}">
    <label for="titulos">Títulos</label>
</div>

<div class="input-field">
    <input type="text" name="curso_descricao" id="" value="{{isset($registro->curso_descricao) ? $registro->curso_descricao  : '-' }}">
    <label for="Descrição">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="curso_valor" id="" value="{{isset($registro->curso_valor) ? $registro->curso_valor  : '-' }}">
    <label for="valor">Valor</label>
</div>

<div class="input-field">
    <p>
        <label>
            <input name="curso_publicado" type="checkbox" />
            <span>Publicado?</span>
        </label>        
    </p>
</div>

<div class="row">
    <button  type="submit" class="btn deep-orange">Salvar</button>
</div>

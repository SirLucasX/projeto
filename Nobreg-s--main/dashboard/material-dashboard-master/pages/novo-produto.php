<h1>Novo Produto</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name= acao value="cadastrar">

<div class= "mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control">
</div>


<div class= "mb-3">
    <label>Quantidade em estoque</label>
    <input type="int" name="qtde" class="form-control">
</div>


<div class= "mb-3">
    <label>Quantidade Vendida</label>
    <input type="int" name="qtdv" class="form-control">
</div>


<div class= "mb-3">
    <label>Valor de venda</label>
    <input type="float" name="valor" class="form-control">
</div>


<div class= "mb-3">
   <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</input>
</form>
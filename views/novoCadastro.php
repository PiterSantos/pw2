<br>
<div class="caixa">
    <h4>Novo Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br>
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Observação</label>
            <input type="text" class="form-control" id="obs" name="obs">
        </div>
        <div class="mb-3">
            <label class="form-label">Imagem:</label>
            <label for="image" class="form-label">
                <img id="previewImage" src="https://icones.pro/wp-content/uploads/2021/02/icono-de-camara-gris.png" alt="Ícone de Câmera">
            </label>
            <input type="file" name="image" id="image" accept="image/*" required style="display: none;" onchange="previewFile()">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</div>
<br><br>
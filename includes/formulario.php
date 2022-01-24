<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">
                Voltar
            </button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="digit o nome" required>
        </div>
        <div class="form-group">
            <label>CPF:</label>
            <input type="text" class="form-control" name="cpf" placeholder="127.127.127-11" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="digit o email" required>
        </div>
        <div class="form-group">
            <label>Descrição:</label>
            <textarea class="form-control" name="descricao" id="" cols="20" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button  type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>

</main>
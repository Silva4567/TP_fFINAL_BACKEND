<html>
    <head>
        <meta charset="UTF-8">
        <title>Inserir Produtos</title>
    </head>

        <form action=" " method="get">

            <label for="nome"> Nome: </label>
            <input type="text" name="nome"><br></form>

            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao"></br></br>

            <label for="preco"> Preço: </label>
            <input type="text" name="preco" ></br></br>

            <select name="exibir_categorias">
                <?php
                $pdo = new PDO("sqlite:estoque.db");

                $query_select_categorias = "";

                ?>
                <option value="1">Arroz</option>
            </select>
        </form>
    </body>
</html>

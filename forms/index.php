<html>

<body>
    <form action="" method="POST">
        <input type="text" placeholder="nome" name="nome">
        <input type="email" placeholder="email" name="email">
        <button type="submit" name="enviar">vai</button>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo "olá $nome, seu email é $idade";
    }
    ?>


</body>

</html>
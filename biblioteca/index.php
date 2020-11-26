<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biblioteca </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php
            require_once "aluno.php";
            require_once "livro.php";

            $l = new livro();// tit,autor,totpag,empliv
            $p = new aluno();// nome,idade,matric

            $l-> inserir("a origem "," jubisclaide",200,$p);
            $p-> inserir("felipe",15,22);
            


            $l-> descricao();

            //print_r($l);
            // print_r($p);

        ?>
    </pre>

</body>
</html>
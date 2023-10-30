<!DOCTYPE html>
<html lang="pt-br">
    
    <?php
    require_once "model/partida.php";

    $caminhoBanco = "database/jogo_ranking";
    $conexao = new PDO("sqlite:" . $caminhoBanco);
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallow</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/game.js" defer></script>

</head>
<body class="ranking">

<header style="text-align: center;">
        <h1>Hallow</h1>
</header>


<div id="popup">
    <div class="content">

    <h1>Ranking</h1>
<table>
    <thead>
        <tr>
            <th>POSIÇÃO</th>
            <th>NOME</th>
            <th>ACERTOS</th>
            <th>ERROS</th>
            <th>TENTATIVAS</th>
            <th>DATA/HORA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = $conexao->query("SELECT * FROM ranking ORDER BY acertos DESC, erros ASC, data_hora DESC;");
            $partida = $consulta->fetchAll(PDO::FETCH_CLASS, "Partida");

            $i = 1;
            foreach ($partida as $p) :
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $p->getNome(); ?></td>
                    <td><?= $p->getAcertos(); ?></td>
                    <td><?= $p->getErros(); ?></td>
                    <td><?= $p->getTentativas(); ?></td>
                    <td><?= $p->getData_hora(); ?></td>
                    </tr>
                <?php
                endforeach;
            ?>
            </tbody>
    </table>

    </div>

    <button class="btnDesign" id="voltar">voltar</button>

</div>        

          
      <footer>
          <div>
              <p>Atividade</p>
              <p>Disciplina: Programação Para Internet</p>
              <P>Professor: Marcelo Figueiredo Barbosa Júnior</P>
              <P>IFRN - Campus Santa Cruz RN</P>
          </div>
      
          <div>
              <p>Todos os direitos reservados ©</p>            
          </div>
      
          <div>
              <p>Desenvolvido por</p>
              <p>Arthur Rafael Araújo Monteiro</p>
              <p>Pedro Arthur de Azevedo Silva</p>
              <P>Vinicius Costa de Oliveira</P>
      
          </div>
      </footer>

      <script>
          let btnVoltar = document.getElementById("voltar");

btnVoltar.addEventListener("click", function() {

  window.location.href = "index.php"

  });
      </script>


    </body>
</html>
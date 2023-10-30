<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallow</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/game.js" defer></script>

</head>

<body>

<header>
        <h1>Hallow</h1>

        <div id="jogador">
            <h1 class="n">nome</h1>
        </div>

        <div class="acertos">
            <p >Acertos: 0</p>

        </div>
        <div class="erros">
            <p>Erros: 0</p>
        </div>
        
        <div class="tentativas">
            <p>Tentativas: 0</p>
        </div>   

        <div>
            <p id="temporizador">30</p>
        </div>   
    </header>

        <div id="popup">
            <div class="content">
              <img src="elementos/abobora.png">
              <h2>Hallow</h2>
              <p>Clique abaixo e inicie essa experiência gamepilante.</p>

              <button class="btnDesign" id="iniciar">iniciar</button>
    
                <form method="GET" action="ws/conexao.php" id="formulario" class="inputBox">
                    <input type="text" placeholder="jogador" id="nome" name="nome">
                    <input type="hidden" place
                     holder="acertos" id="acertos" name="acertos">
                    <input type="hidden" placeholder="erros" id="erros" name="erros">
                    <input type="hidden" placeholder="tentativas" id="tentativas" name="tentativas">
                    <input type="submit" value="ver ranking" class="btn" id="ranking">
                </form>
    
    
            </div> 
          </div>
    
    <div id="game">
    
        <img id="alvo" src="Elementos/fantasma.png"/>
      
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


</body>
</html>
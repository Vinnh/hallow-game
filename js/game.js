// Função para obter um número aleatório entre min e max
function getRandomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

// Função para mover a imagem aleatoriamente dentro da div
function moverImagem() {
    const divContainer = document.getElementById('game');
    const alvo = document.getElementById('alvo');

    // Obtem as dimensões da div
    const divWidth = divContainer.offsetWidth;
    const divHeight = divContainer.offsetHeight;

    // Obtem as dimensões da imagem
    const imgWidth = alvo.offsetWidth;
    const imgHeight = alvo.offsetHeight;

    // Calcula as coordenadas X e Y para posicionar a imagem aleatoriamente dentro da div
    const maxX = divWidth - imgWidth;
    const maxY = divHeight - imgHeight;
    const randomX = getRandomNumber(0, maxX);
    const randomY = getRandomNumber(0, maxY);

    // Define as coordenadas da imagem
    alvo.style.left = `${randomX}px`;
    alvo.style.top = `${randomY}px`;
}


// Variáveis dos botões
var btnJogar = document.getElementById('jogar');
var btnRanking = document.getElementById('ranking');
var jogador = document.getElementById('jogador');

// Executa a função quando a página é carregada e também em um intervalo de tempo para continuar o movimento
window.onload = function () {

    popupAlternar();

    var formulario = document.getElementById("formulario");
    var input = document.getElementById("nome");

    formulario.addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        document.querySelector('.n').innerHTML = input.value;
        jogador.style.display = 'block';
    
        moverImagem();
        setInterval(moverImagem, 1000); // Define o intervalo de tempo para mover a imagem (3 segundos no exemplo)
        popupAlternar();

        });

    
};

// Criação do placar

// Confere se o alvo foi clicado e adiciona acerto

// Variáveis para contagem
var tentativas = 0;
var acertos = 0;
var erros = 0;

// Função para atualizar os elementos de contagem
function atualizarContagem() {
  document.querySelector('.tentativas').innerHTML = 'Tentativas: ' + tentativas;
  document.querySelector('.acertos').innerHTML = 'Acertos: ' + acertos;
  document.querySelector('.erros').innerHTML = 'Erros: ' + erros;
}

// Função para animar quando acertar

function animation() {

    var srcOriginal = alvo.src;
    var novoSrc = 'elementos/acertou.png';

    // Altera o SRC para a nova imagem
    alvo.src = novoSrc;

    // Aguarda .5 segundos (500 milissegundos)
    setTimeout(function() {
      // Retorna ao SRC original
      alvo.src = srcOriginal;
    }, 400); // Tempo em milissegundos
}


// Função para manipular o clique
function handleClique(event) {
  tentativas++;
  atualizarContagem();

  if (event.target.id == 'alvo') {
    acertos++;
    atualizarContagem();
    animation();
  } else {
    erros++;
    atualizarContagem();
  }
}

// Adiciona o evento de clique ao elemento game-container
game.addEventListener('click', handleClique);

function popupAlternar(){
    const popup = document.getElementById('popup');
    popup.classList.toggle('active');
  }
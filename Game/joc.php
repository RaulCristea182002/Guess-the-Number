<!DOCTYPE html>
<html>
<head>
  <title>My Game</title>
</head>
<link rel="stylesheet" href="Style.css">
<body>
<div id="game">
  <h1>Guess the Number</h1>
  <p id="message"></p>
  <p>Guess a number between 1 and 100:</p>
  <input type="text" id="guess">
  <button id="submit">Submit</button>
  <button id="reset" disabled>Reset</button>
  <p id="attempts"></p>
  <p id="loading">Loading...</p>
</div>
  <script>
    let correctNumber = Math.floor(Math.random() * 100) + 1;

let guessInput = document.getElementById("guess");
let submitBtn = document.getElementById("submit");
let resetBtn = document.getElementById("reset");
let messageP = document.getElementById("message");
let loadingP = document.getElementById("loading");
let attempts = 0;


submitBtn.addEventListener("click", checkGuess);
resetBtn.addEventListener("click", resetGame);

function checkGuess() {
  attempts++;
  document.getElementById("attempts").innerHTML = `Attempts: ${attempts}`;
  let userGuess = Number(guessInput.value);
  if (userGuess === correctNumber) {
    messageP.innerHTML = "Congratulations! You guessed the number!";
    resetBtn.disabled = false;
  } else if (userGuess > correctNumber) {
    messageP.innerHTML = "Too high. Try again.";
  } else {
    messageP.innerHTML = "Too low. Try again.";
  }
}

function resetGame() {
  correctNumber = Math.floor(Math.random() * 100) + 1;
  messageP.innerHTML = "";
  guessInput.value = "";
  resetBtn.disabled = true;
}




  </script>
</body>
</html>
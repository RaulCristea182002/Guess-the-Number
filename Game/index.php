<!DOCTYPE html>
<html>
  <head>
    <title>Guess the Number</title>
    
  </head>
  <link rel="stylesheet" href="Styleind.css">
  <body>
    <h1>Guess the Number</h1>
    <p>I'm thinking of a number between 1 and 100. Can you guess it?</p>
    <form>
      <label>Your guess:</label>
      
      <a href="joc.php" class="category-link">Start</a>
    </form>
    <p id="result"></p>
    <script>
    let targetNumber;
const form = document.querySelector("form");
form.addEventListener("submit", function(event) {
  event.preventDefault();
  targetNumber = Number(document.querySelector("#number-input").value);
  console.log("The target number is: " + targetNumber);
});
</script>
  </body>
</html>

<!doctype html>
  
<html>
<head>
<title> titre </title>
</head>
<body>
<div id=clickableDiv>Click me</div>
<div id="counterDiv">0</div>
<style>
div {
  float: left;
  width: 25%;
  height: 2em;
  padding: 1em;
  text-align: center;
  font-weight: bold;
  border: 1px solid grey;
  }
</style>
<script>
// Defines references to elements (using `const` because the values
//   should never change)
const clickableDiv = document.getElementById("clickableDiv");
const counterDiv = document.getElementById("counterDiv");

// Defines a listener that will call our function whenever a click happens
document.addEventListener("click", count);

// Defines the `count` function
function count(event){

  // Limits which click events will change our counter
  if (event.target == clickableDiv){

    // Declares variables to hold numbers (using `let` in case we 
    //   might want to change the values later)
    let oldCount;
    let newCount;

    // Assumes the HTML content of counterDiv looks like a number, 
    // gets that number, and stores it in oldCount
    oldCount = parseInt(counterDiv.innerHTML);

    // Adds 1 to the number stored in oldCount, and stores the result 
    //   in newCount
    newCount = oldCount + 1;

    // Makes a string from the number (not strictly necessary) 
    //   and replaces the HTML content of counterDiv with that string
    counterDiv.innerHTML = newCount.toString();

  }
}
</script>


</body>
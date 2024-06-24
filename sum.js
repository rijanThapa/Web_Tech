function calculate() {
  // Retrieve input values
  let num1 = document.getElementById("num1").value;
  let num2 = document.getElementById("num2").value;

  // Calculate sum
  let sum = Number(num1) + Number(num2);

  // Display the sum in the result element
  let resultElement = document.getElementById("result");
  resultElement.innerHTML = sum;
}

function changeColor() {
  // Get the current background color
  let currentColor = document.body.style.backgroundColor;

  // Toggle the background and text colors
  if (currentColor === "black") {
    document.body.style.backgroundColor = "white";
    document.body.style.color = "black";
  } else {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
  }
}

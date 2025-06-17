function calculate() {
  let a = document.getElementById("num1").value;
  let b = document.getElementById("num2").value;
  let op = document.getElementById("operation").value;

  let num1 = parseFloat(a);
  let num2 = parseFloat(b);
  let res = "";

  if (isNaN(num1) || isNaN(num2)) {
    res = "⚠️ Please enter valid numbers.";
  } else {
    if (op == "+") {
      res = num1 + num2;
    } else if (op == "-") {
      res = num1 - num2;
    } else if (op == "*") {
      res = num1 * num2;
    } else if (op == "/") {
      if (num2 == 0) {
        res = "Cannot divide by zero.";
      } else {
        res = num1 / num2;
      }
    } else if (op == "%") {
      res = num1 % num2;
    } else if (op == "^") {
      res = Math.pow(num1, num2);
    } else {
      res = "Invalid operation.";
    }
  }

  document.getElementById("result").innerHTML = "✅ Result: " + res;
}

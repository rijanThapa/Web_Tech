const marks = [80, 99, 95, 95, 96];

function calculateSum(marks) {
 

  let sum = 0;
  marks.forEach((mark) => {
    sum += mark;
  });

  let maxMarks = 500;
  let percentage = (sum / maxMarks) * 100;
  if (percentage < 50) {
    console.log(" fail");
  } else if (percentage < 60) {
    console.log("Second Division");
  } else if (percentage < 80) {
    console.log("Fir Division");
  } else console.log("Distinction");
}

calculateSum(marks);

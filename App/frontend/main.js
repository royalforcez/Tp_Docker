const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
let count = 0;

btn1.addEventListener("click", () => {
    count++;
    console.log(count);
    document.getElementById("count").innerText = "Count : " + count;

    fetch("http://localhost:8001/database.php?score=" + count);
});

btn2.addEventListener("click", () => {
    count = 0;
    console.log(count);
    document.getElementById("count").innerText = "Count : " + count;

    fetch("http://localhost:8001/database.php?score=" + count);
});

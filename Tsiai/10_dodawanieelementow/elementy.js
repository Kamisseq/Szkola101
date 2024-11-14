const formE = document.getElementById("taskForm");
const taskInputE = document.getElementById("taskInput");
const ulE = document.querySelector("ul");
const errorMessageE = document.getElementById("errormessage");
const rightE = document.querySelector(".right");




formE.addEventListener("submit", (event) => {
  event.preventDefault();

  const task = taskInputE.value 

  if (task.length > 2) {
    // addTaskLi(task)
    addTaskDiv(task)

    taskInputE.value = "";
    taskInputE.classList.remove("error");

    }

    else{
        taskInputE.classList.add("error");
        taskInputE.placeholder = "Wpisz dluzsze zadanie"
        console.dir(taskInputE)
    }
});

function addTaskLi(task){
    const liE = document.createElement("li");
    liE.innerHTML = task;
    ulE.appendChild(liE);
}

function addTaskDiv(task){
    const divE = document.createElement("div");
    divE.className = "imageContainer";
    const pE = document.createElement("p");
    pE.textContent = task;
    divE.appendChild(pE);
    rightE.appendChild(divE);
}

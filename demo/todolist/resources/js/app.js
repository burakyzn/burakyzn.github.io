const todoList = document.querySelector('#todo-list');

function getTodos() {
    let todos;
    todos = JSON.parse(localStorage.getItem("todos"));

    if(todos != null){
        console.log(todos);
        for (let i = 0; i < todos.length;i++){

            var day = calculateTime(todos[i].todo_day,todos[i].todo_month,todos[i].todo_year);

            const newTodo = document.createElement('div');
            newTodo.className = 'col-lg-3 card-col';
            newTodo.innerHTML += '<div class="card" style="width: 18rem;"><div class="card-img-top card-top">' + day + ' Day' +
            '<div class="card-body"><p class="card-text card-main">'+ todos[i].todo_name +'</p><input type="button" id="btnDelete" class="btn btn-primary" value="Delete"></div></div>';
            newTodo.id = "todo" + todoList.childElementCount;
            todoList.appendChild(newTodo);
        }
    }
}

function addTodoToLocal(todoName, todoDay, todoMonth, todoYear){
    let todos;

    if (localStorage.getItem("todos") == null) {
        todos = [];
        
    } else {
        todos = JSON.parse(localStorage.getItem("todos"));
       
    }

    var newTodoObj = {
        todo_name : todoName,
        todo_day : todoDay,
        todo_month : todoMonth,
        todo_year : todoYear 
    }

    todos.push(newTodoObj);

    localStorage.setItem("todos", JSON.stringify(todos));
}

function calculateTime(day,month,year){
    var date_today = new Date();
    var date_todo = new Date(year, month, day, 0, 0, 0, 0);

    var second = Math.floor((date_todo- date_today) / 1000);
    var minute = Math.floor(second / 60);
    var hour = Math.floor(minute / 60);
    var day = Math.floor(hour / 24);

    return day;
}

function addTodo(){
    const todoName = document.querySelector('#todoName').value;
    const todoDay = document.querySelector('#todoDay').value;
    const todoMonth = document.querySelector('#todoMonth').value;
    const todoYear = document.querySelector('#todoYear').value;

    var day = calculateTime(todoDay, todoMonth, todoYear);

    const newTodo = document.createElement('div');
    newTodo.className = 'col-lg-3 card-col';
    newTodo.innerHTML += '<div class="card" style="width: 18rem;"><div class="card-img-top card-top">' + day + ' Day' +
    '<div class="card-body"><p class="card-text card-main">'+ todoName +'</p><input type="button" id="btnDelete" class="btn btn-primary" value="Delete"></div></div>';
    newTodo.id = "todo" + todoList.childElementCount;
    todoList.appendChild(newTodo);

    addTodoToLocal(todoName, todoDay, todoMonth, todoYear);
}

todoList.addEventListener("click", function(event){

    console.log(event.target);

    if(event.target.id= 'btnDelete' && event.target.className != 'card-text card-main'){
        todoList.removeChild(event.target.parentElement.parentElement.parentElement.parentElement);

        if (localStorage.getItem("todos") != null) {
            let todos = JSON.parse(localStorage.getItem("todos"));
            localStorage.clear();

            for (var i = 0 ; i < todos.length; i++){
                if(todos[i].todo_name == event.target.parentElement.firstChild.textContent){
                    todos.splice(i,1);
                    break;
                }
            }

            if (todos.length == 0)
                 localStorage.clear();

            localStorage.setItem("todos", JSON.stringify(todos));
        }
    }
})
let myTodoList = document.querySelector('#todo-list');

myTodoList.addEventListener("click", function(event){

    if(event.originalTarget.className == 'fa fa-remove'){
        // console.log('dogru');
        // console.log(event.target.parentElement.parentElement);
        myTodoList.removeChild(event.target.parentElement.parentElement);
        
        let todos;

        if(localStorage.getItem("todos") != null){
            todos = JSON.parse(localStorage.getItem("todos"));

            localStorage.clear();

            let index = todos.indexOf(event.target.parentElement.parentElement.textContent);
            if (index !== -1)
            todos.splice(index, 1);
            
            if(todos.length == 0)
            localStorage.clear();
        
            localStorage.setItem("todos", JSON.stringify(todos));
        }      
    }

})


let getTodos = function () {
    // console.log("Gorevler cekiliyor.");
    let todos;
    const todoList = document.querySelector('#todo-list');
    todos = JSON.parse(localStorage.getItem("todos"));

    if(todos != null){
        console.log(todos);
        for (let i = 0; i < todos.length;i++){
            const newTodo = document.createElement('li');
            newTodo.className = 'list-group-item d-flex justify-content-between todos';
            newTodo.appendChild(document.createTextNode(todos[i]));
            newTodo.innerHTML += '<a href = "#" class ="delete-item"><i class="fa fa-remove"></i></a>';
            newTodo.id = "todo" + todoList.childElementCount;
            todoList.appendChild(newTodo);
        }
    }
}

let addTodo = function(){
    // console.log("Gorev ekleniyor.");

    let todos;
    const todoName = document.querySelector('#todoName').value;
    const todoList = document.querySelector('#todo-list');

    const newTodo = document.createElement('li');
    newTodo.className = 'list-group-item d-flex justify-content-between todos';
    newTodo.appendChild(document.createTextNode(todoName));
    newTodo.innerHTML += '<a href = "#" class ="delete-item"><i class="fa fa-remove"></i></a>';
    newTodo.id = "todo" + todoList.childElementCount;
    todoList.appendChild(newTodo);

    if(localStorage.getItem("todos") == null){
        todos = [];
    } else {
        todos = JSON.parse(localStorage.getItem("todos"));
    }

    todos.push(newTodo.textContent);

    localStorage.setItem("todos", JSON.stringify(todos));
}

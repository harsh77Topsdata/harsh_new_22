function getTodosFromCookies() {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
        let [name, value] = cookie.trim().split('=');
        if (name === 'todos') {
            return JSON.parse(decodeURIComponent(value));
        }
    }
    return [];
}

function saveTodosToCookies(todos) {
    const expires = new Date();
    expires.setFullYear(expires.getFullYear() + 1); 
    document.cookie = `todos=${encodeURIComponent(JSON.stringify(todos))}; expires=${expires.toUTCString()}; path=/`;
}


function renderTodos(todos) {
    const todoList = document.getElementById('todoList');
    todoList.innerHTML = ''; 
    todos.forEach(todo => {
        const li = document.createElement('li');
        li.textContent = todo;
        todoList.appendChild(li);
    });
}


document.getElementById('addBtn').addEventListener('click', () => {
    const input = document.getElementById('todoInput');
    const newTodo = input.value.trim();

    if (newTodo !== '') {
        const todos = getTodosFromCookies();
        todos.push(newTodo); 
        saveTodosToCookies(todos); 
        renderTodos(todos);
        input.value = '';
    }
});


window.addEventListener('DOMContentLoaded', () => {
    const todos = getTodosFromCookies();
    renderTodos(todos);
});

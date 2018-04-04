<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test de la mort qui tue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
</head>

<body>

    <nav id="navbar">
        
    </nav>

    <div id="app">
        {{ message }}
    </div>

    <div id="app-2">
      <span v-bind:title="message">
        Hover your mouse over me for a few seconds
        to see my dynamically bound title!
      </span>
    </div>

    <div id="app-3">
        <span v-if="seen">Now you see me (or not)</span>
    </div>

    <div id="app-4">
      <ol>
        <li v-for="todo in todos">
          {{ todo.text }}
        </li>
      </ol>
      <button v-on:click="ajoutText">Ajouter</button>
      <button v-on:click="enleverText">Retirer</button>
    </div>

    <div id="app-5">
      <p>{{ message }}</p>
      <button v-on:click="reverseMessage">Reverse Message</button>
    </div>

    <div id="app-6">
      <p>{{ plop }}</p>
      <input v-model="plop">
    </div>

    <div id="app-7">
        <ol>
          <!-- Create an instance of the todo-item component -->
          <todo-item 
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id"></todo-item>
        </ol>
    </div>


    <script src="vue.js"></script>
    <script src="jquery.min.js"></script>
    <script src="app.js"></script>
</body>

</html>

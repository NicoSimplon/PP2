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




    
    <!-- <img id="ok" src="325547.jpg" style="width:50%" style="cursor:pointer "> -->

<?php 
// $today = date("Y-m-d");
// echo $today;


//     $file = scandir('photo');

//     foreach ($file as $value) {
//         echo '<img src="photo/' . $value . '"> ';
//     }


#https://openclassrooms.com/courses/supprimer-des-fichiers-sur-le-serveur-grace-a-php

    // $upload_file_name = preg_replace( $upload_file_name);
    // $dest = '/photo/' . $upload_file_name;
    // echo $dest;


    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if (is_uploaded_file($_FILES['my_upload']['tmp_name'])) {

    //         if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) {
    //             echo 'File Has Been Uploaded !';
    //         }
    //          else {
    //             echo "nop";
    //         }
    //     }
    // }

    ?>

    <!-- <form action="" method="post" enctype="multipart/form-data">
        <input id="my_upload" name="my_upload" type="file">
        <input type="submit" value="Upload Now">
    </form> -->



    <script src="vue.js"></script>
    <script src="jquery.min.js"></script>
    <script src="app.js"></script>
</body>

</html>
<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <header>

        </header>
        <div class="row">
            <div class="col-8">
                <div  v-for="disk in disksList"class="card col-4">
                    <img :src="disk.poster" alt="">
                    <h2>{{ disk.title }}</h2>
                    <span>{{ disk.author }}</span>
                    <span>{{ disk.year}}</span>
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="./script/script.js"></script>
</body>
</html>
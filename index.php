
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dischi php</title>

    <!-- BOOTSTRAP 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- LINK MY_STYLE -->
    <link rel="stylesheet" href="css/style.css">

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

</head>
<body>

    <div id="app">
        <header>
            <h1>
                Dischi!
            </h1>
        </header>
        <main>
            <ul>
                <li v-for="disc in disksList">
                    <img :src="disc.poster" alt="disc poster">
                    <h2>
                        {{ disc.title }}
                    </h2>
                    <p class="author">
                        {{ disc.author }}
                    </p>
                    <p class="year">
                        {{ disc.year }}
                    </p>
                </li>
            </ul>
        </main>
    </div>

    <script src="./script/Main.js"></script>
</body>
</html>
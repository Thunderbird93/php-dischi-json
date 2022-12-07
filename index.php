<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
    <div id="app">

        <header>
            <div class="container" id="header-container">
                <div class="header-left">
                    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div id="discs-container">
                    <div v-for="disco in dischi"
                    class="disco">
                        <img :src="disco.poster" :alt="disco.title" />
                        <h3>{{ disco.title }}</h3>
                        <small>{{ disco.author }}</small>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script src="./main.js"></script>
</body>

</html>
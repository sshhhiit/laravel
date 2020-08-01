<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larreact</title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <h1>TEST</h1>
        <button onclick="testing()">click</button>
    </body>

    <script>
        function testing()
        {
            axios.get('/test')
                .then(function (response) {
                    // handle success
                    console.log(response.data);
                }).catch(function(error)
                {
                    alert('Ошибка. Что-то пошло не так. :c')

                })
         
        }
    </script>
</html>

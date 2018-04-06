<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search User</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
        function showSuggestion(str) {
            if(str.length > 0) {
                //AJAX REQ
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "suggest_by_user.php?q="+str, true);
                xhr.send();

                xhr.onload = function () {
                    if (this.status === 200) {
                       var ob =JSON.parse(this.responseText) ;

                        document.getElementById('title').innerHTML = ob.title;
                        document.getElementById('created').innerHTML = ob.created_at;
                        document.getElementById('author').innerHTML = ob.author;
                        document.getElementById('body').innerHTML = ob.body;
                    }
                }

            }
         else
            {
                document.getElementById('output').innerHTML = "";
            }
        }

        function showSuggestion(str) {
            if(str.length > 0) {
                //AJAX REQ
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "suggest_by_user.php?q="+str, true);
                xhr.send();

                xhr.onload = function () {
                    if (this.status === 200) {
                        var ob =JSON.parse(this.responseText) ;

                        document.getElementById('title').innerHTML = ob.title;
                        document.getElementById('created').innerHTML = ob.created_at;
                        document.getElementById('author').innerHTML = ob.author;
                        document.getElementById('body').innerHTML = ob.body;
                    }
                }

            }
            else
            {
                document.getElementById('output').innerHTML = "";
            }
        }

        function showSuggestion(str) {
            if(str.length > 0) {
                //AJAX REQ
                let xhr = new XMLHttpRequest();
                xhr.open("GET", "suggest_by_user.php?q="+str, true);
                xhr.send();

                xhr.onload = function () {
                    if (this.status === 200) {
                        var ob =JSON.parse(this.responseText) ;

                        document.getElementById('title').innerHTML = ob.title;
                        document.getElementById('created').innerHTML = ob.created_at;
                        document.getElementById('author').innerHTML = ob.author;
                        document.getElementById('body').innerHTML = ob.body;
                    }
                }

            }
            else
            {
                document.getElementById('output').innerHTML = "";
            }
        }
















    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)"/>
        </form>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Username</button>
            <button type="button" class="btn btn-primary">Title</button>
            <button type="button" class="btn btn-primary">Content</button>
        </div>


        <p>Suggestions: <span id="output" style="font-weight: bold"></span> </p>



                <div class="well">
                    <h3 id="title"></h3>
                    <small>Created on <div id="created"></div> by <div id="author"></div></small>

                    <div id="body"></div>

                </div>

    </div>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="public/app.js"></script>
    <title>WHC Test</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
        <div class="col-md-auto">
            <h3>Available Commands</h3>
            <p>Calculator</p>
            <ul>
                <li>add arg1 ... argN</li>
                <li>subtract arg1 ... argN</li>
            </ul>
            <p>Sorting</p>
            <ul>
                <li>sort-asc arg1 ... argN</li>
            </ul>
            <p>Github API Requests</p>
            <ul>
                <li>repo-desc username repo-name</li>
            </ul>
        </div>
            <div class="col-md-auto">
            <h3>Input</h3>
                <form id="submit">
                    <input class="form-control" type="text" name="command" id="command" required>
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-auto">
                <h2>Output</h2>
                <ul id="output"></ul>
            </div>
            <div class="col-md-auto">
                <h2>Clear Ouput</h2>
                <button class="btn btn-primary" id="clear">Clear</button>
            </div>
        </div>
    </div>
</body>
</html>
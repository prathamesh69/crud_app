<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">User Entries</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <h1>Add a New Entry</h1>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt3 p-3">
                <form method="POST" action="/entries/save_entries">
                    @csrf
                    <div class="form-group">
                        <label>Account type</label>
                        <select class="form-select" aria-label="Default select example" name="acc_type">
                            <option value="savings" selected>Savings</option>
                            <option value="current">Current</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Narration</label>
                        <input type="text" name="narration" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>User Currency</label>
                        <input type="text" name="user_currency" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Transaction Type</label>
                        <select class="form-select" aria-label="Default select example" name="txn_type">
                            <option selected>Credit</option>
                            <option value="debit">Debit</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

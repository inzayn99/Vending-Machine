<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vending Machine</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">


</head>
<body class="antialiased">
<div class="" id="app">
    {{--    <example-component />--}}
    {{--    {!! menu('Home') !!}--}}
</div>
{{--<h1 class="title">Vending Machine</h1>--}}

<div class="container" style="margin-top: 10px">
    <h1 style="text-align: center">Vending Machine</h1>
    <hr>
    <div class="row">
        <div class="col-md-6" style="float:left;
         border: 2px solid black;
        background-color: #d4efb1">
            <table class="table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4" style="margin-left: 100px">
            <form action="" method="POST">
                {{csrf_field()}} <span style="display: block; text-align: center"><b>Balance</b></span>
                <span style="display:block;
                color: #b8ea7d;
                font-size: 25px;
                font-weight: bold;
                text-align: center">Inserted Money</span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rs</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Amount to Add" id="usr" name="amount">
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-success">Add Cash</button>
                </div>
            </form>
            <form action="" method="POST">
                <span style="display: block;
                 margin-top:50px;
                  text-align: center"><b>Code</b></span>
                <div class="input-group mb-3">
                    <input type="text"
                           style="text-align: center"
                           class="form-control"
                           placeholder="Choose snack"
                           id="code" name="code">
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-outline-success">Buy</button>
                </div>

                <div
                    style="width:200px;
                    margin: auto ;
                    border: 1px solid gray;
                    background-color: #d4efb1;
                     border-radius: 5px;
                     margin-top: 200px">
                    <span style="display: block; text-align: center">Change</span>
                    <span style="display: block; text-align: center">dispensed_change</span>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>

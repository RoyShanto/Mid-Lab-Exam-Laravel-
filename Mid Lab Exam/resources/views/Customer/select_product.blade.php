<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- <form action="", method="POST"> -->
            <h1>After login show all product</h1>
            @foreach($users as $user)                             <!-- Using Quiry bielder -->
                <table border="1">
                    <tr>
                        <td>Name</td>
                        <td>{{$user->p_name}}</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>{{$user->p_price}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$user->short_description}}</td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="number"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="submit"></td>
                        <td></td>
                    </tr>

                </table><br>
            @endforeach
        <!-- </form> -->

    </body>
</html>

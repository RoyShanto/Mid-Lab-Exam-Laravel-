<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    {{ session('username')}}
        <!-- <form action="", method="POST"> -->
            <h1>All product</h1>
            @foreach($users as $user)
            <a href="/show_product/{{$user['p_id']}}">
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Size</td>
                        <td>Description</td>
                        <td>Image</td>
                    </tr>
                    <tr>
                        <td>{{$user['p_id']}}</td>
                        <td>{{$user['p_name']}}</td>
                        <td>{{$user['p_price']}}</td>
                        <td>{{$user['p_quantity']}}</td>
                        <td>{{$user['size']}}</td>
                        <td>{{$user['short_description']}}</td>
                        <td>{{$user['image']}}</td>
                    </tr>
                </table><br>
            </a>
            @endforeach
        <!-- </form> -->
                <a href="/logout">Logout</a>
    </body>
</html>

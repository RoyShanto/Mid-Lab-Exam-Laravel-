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
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Size</td>
                        <td>Description</td>
                        <td>Gender</td>
                        <td>Image</td>
                        <td colspan="2">Action</td>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user['p_id']}}</td>
                        <td>{{$user['p_name']}}</td>
                        <td>{{$user['p_price']}}</td>
                        <td>{{$user['p_quantity']}}</td>
                        <td>{{$user['size']}}</td>
                        <td>{{$user['short_description']}}</td>
                        <td>{{$user['gender']}}</td>
                        <td>{{$user['image']}}</td>
                        <td><a href="/edit_product/{{$user['p_id']}}">Edit</a></td>
                        <td><a href="/delete_product/{{$user['p_id']}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table><br>
        <!-- </form> -->
                <a href="/logout">Logout</a>
    </body>
</html>

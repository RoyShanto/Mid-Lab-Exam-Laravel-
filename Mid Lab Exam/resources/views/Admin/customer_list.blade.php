<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer list</title>
    </head>
    <body>
    {{ session('username')}}
        <!-- <form action="", method="POST"> -->
            <h1>Customer list</h1>

                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>username</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>City</td>
                        <td>Country</td>
                        <td>Phone</td>
                        <td>user type</td>
                        <td>Date Added</td>
                        <td>Last updated</td>
                        <td>Address</td>
                        <td>Action</td>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['full_name']}}</td>
                        <td>{{$user['user_name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['password']}}</td>
                        <td>{{$user['city']}}</td>
                        <td>{{$user['country']}}</td>
                        <td>{{$user['phone']}}</td>
                        <td>{{$user['user_type']}}</td>
                        <td>{{$user['date_added']}}</td>
                        <td>{{$user['last_updated']}}</td>
                        <td>{{$user['address']}}</td>
                        <td><a href="/delete_customer/{{$user['id']}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table><br>

        <!-- </form> -->
                <a href="/logout">Logout</a>
    </body>
</html>

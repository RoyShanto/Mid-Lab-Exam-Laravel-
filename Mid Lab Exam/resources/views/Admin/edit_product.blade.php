<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product Here!</h1>
    <form method="post">

        @csrf

        <fieldset>
            <legend>Add Product</legend>
            <table>
    @foreach($product as $user)
            <tr>
                <td>Product Name:</td>
                <td>
                    <input type="text" name="p_name" value="{{$user->p_name}}"><br>
                </td>
            </tr>
            <tr>
                <td>Product Price:</td>
                <td>
                    <input type="number" name="p_price" value="{{$user->p_price}}"><br>
                </td>
            </tr>

            <tr>
                <td>Product Quantity:</td>
                <td>
                    <input type="number" name="p_quantity" value="{{$user->p_quantity}}"><br>
                </td>
            </tr>
            <tr>
                <td>Product Size:</td>
                <td>
                    <input type="number" name="p_size" value="{{$user->size}}"><br>
                </td>
            </tr>
            <tr>
                <td>Short Description:</td>
                <td>
                    <input type="text" name="short_description" value="{{$user->short_description}}"><br>
                </td>
            </tr>
            <tr>
                <td>Gender For:</td>
                <td>
                    <input type="text" name="p_gender" value="{{$user->gender}}"><br>
                </td>
            </tr>
            <tr>
                <td>Product Image:</td>
                <td>
                    <input type="file" name="p_image" value="{{$user->image}}"><br>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
                <td></td>
            </tr>
    @endforeach
            </table>

        </fieldset>

    </form>
    {{session('msg')}}
</body>
</html>

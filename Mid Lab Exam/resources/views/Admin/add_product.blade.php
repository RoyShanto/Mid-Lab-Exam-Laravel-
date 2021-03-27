<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

    <h1>Add Product Here!</h1>
    <!-- @if($errors->any())
        @foreach($errors -> all() as $err)
        <li>{{$err}}</li>
        @endforeach
    @endif -->
    <form method="post">

        @csrf

        <fieldset>
            <legend>Add Product</legend>
            <table>

            <tr>
                <td>Product Name:</td>
                <td>
                    <input type="text" name="p_name"><br>
                </td>
            </tr>
            <tr>
                <td>Product Price:</td>
                <td>
                    <input type="number" name="p_price"><br>
                </td>
            </tr>

            <tr>
                <td>Product Quantity:</td>
                <td>
                    <input type="number" name="p_quantity"><br>
                </td>
            </tr>
            <tr>
                <td>Product Size:</td>
                <td>
                    <input type="number" name="p_size"><br>
                </td>
            </tr>
            <tr>
                <td>Short Description:</td>
                <td>
                    <input type="text" name="short_description"><br>
                </td>
            </tr>
            <tr>
                <td>Gender For:</td>
                <td>
                    <input type="text" name="p_gender"><br>
                </td>
            </tr>
            <tr>
                <td>Product Image:</td>
                <td>
                    <input type="file" name="p_image"><br>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Upload"></td>
                <td></td>
            </tr>
            </table>

        </fieldset>

    </form>
    {{session('msg')}}
</body>
</html>

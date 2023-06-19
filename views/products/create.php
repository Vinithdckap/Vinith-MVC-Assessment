<!DOCTYPE html>
<html lang="en">
<head>
    <title> Products</title>
    <style>
        body{
            font-style: italic;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        form{
            display: grid;
            position: relative;
            left: 603px;
            bottom: 37px;

        }
        label{
            font-weight: bold;
            width: 220px;
            position: relative;
            right: 164px;
            top: 37px;
            font-size: 19px;

        }
        h1 {

            height: 24px;
            width: 220px;
            position: relative;
            color: darkblue;
            top: 24px;
            right: 25px;
            font-size: 24px;

        }

        input[type=text], input[type=date],input[type=number], input[type=file] {
            width: 20%;
            padding: 10px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .btn {
            background-color:crimson;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            border-radius: 10px;
            position: relative;
            right: 64px;
            top: 14px;
        }
        select {
            width: 20%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
        }

    </style>
</head>
<body>

<form action="/create" method="post"  enctype="multipart/form-data">

        <h1>Create Products</h1>

        <label for="">Product Name</label>
        <input  type="text" name="product_name"  placeholder="Add products">

        <label for="">Price</label>
        <input type="number" name="price" placeholder="Price">

        <label for="">Add Product Image</label>
        <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px">

        <label for="">Product's sku</label>
        <input type="text" name="sku" placeholder="Product SKU">

        <label for="brands">Select Brand </label>
              <select name="brands" id="brands">
                <option value="Asus">Asus</option>
                <option value="Lenovo">Lenovo</option>
                <option value="HP">HP</option>
                <option value="Dell">DELL</option>
              </select>

        <label for="">Manufacture Date</label>
        <input type="date" name="manufactured" placeholder="product date">

        <label for="">Remaining stock</label>
        <input type="number" name="remaining_stock" placeholder="stock">

        <input type="submit" class="btn" name="create" value="Add your Products">

</form>
</body>
</html>


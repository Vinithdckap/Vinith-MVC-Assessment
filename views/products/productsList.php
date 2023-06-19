
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Lists</title>
    <style>
        body {
            font-style: italic;
        }
        table {
            border-collapse: collapse;
            width: 58%;
            height: 232px;
            position: relative;
            left: 137px;
            top: 105px;

        }
        }

        th, td {
            padding: 8px;
            width: 200px;
            border-bottom: 1px solid #ddd;
        }
        tr {
            height: 72px;
        }
        img{
            height: 75px;
            width: 75px;
        }

        .btn{
            font-size: 24px;
            font-weight: 500;
            text-decoration: none;
            position: relative;
            left: 538px;
            top: 50px;
            color: floralwhite;
            background-color: #606657;
            border: none;
            cursor: pointer;
            width: 20%;
            border-radius: 10px;
            height: 43px;

        }


        td {
            text-align: center;

        .edit{
            background-color: cadetblue;
            border: none;
            border-radius: 5px;
            height: 25px;
            width: 41px;
            cursor: pointer;
        }
        .delete{
            background-color: #df2a2a;
            border: none;
            border-radius: 5px;
            height: 25px;
            width: 50px;
            cursor: pointer;

        }
        button{
            background-color: #e3e9dd;
            border: none;
            border-radius: 8px;
            height: 26px;
            width: 62px;

        }

         }

    </style>
</head>
<body>
<table border="2" cellpadding="20px"  >
<tr>
        <th>ProductID</th>
        <th>Product name</th>
        <th>Price</th>
        <th>Product Image</th>
        <th>Product's sku</th>
        <th>Brand</th>
        <th>Date of Manufacture</th>
        <th>Remaining Stock</th>
        <th>Edit</th>
        <th>Delete</th>
</tr>
        <?php foreach ($allproducts as $index => $product):?>

    <tr>
        <td><?php echo $index+1?></td>
        <td><?php echo $product->product_name?></td>
        <td><?php echo $product->price?></td>
        <td>
            <img class="image" src="<?php echo $product->image?>">
        </td>
        <td><?php echo $product->sku?></td>
        <td><?php echo $product->brand?></td>
        <td><?php echo $product->manufactured?></td>
        <td><?php echo $product->remaining_stock?></td>
        <td>
            <form action="/view" method="post">
                <input type="hidden" name="view" value="<?php echo $product->id?>">
                <button type="submit" class="edit" name="action"  value="view">Edit</>
            </button>
            </form>
        </td>
        <td>
            <form action="/delete" method="post">
                <input type="hidden" name="delete" value="<?php echo $product->id?>">
                <button type="submit" class="delete" name ="action" value ="delete" >Delete</button>
            </form>
        </td>
    </tr>

    <?php endforeach;?>
        <form action="/create" method="post">
            <button type ="submit" class="btn"  >Create new one</button>
        </form>
</table>

</body>
</html>
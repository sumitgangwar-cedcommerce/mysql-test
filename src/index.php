<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Add Product</th>
        </tr>
        <tr>
            <td>Enter Product Name</td>
            <td><input type="text" id='name'></td>
        </tr>
        <tr>
            <td>Enter Product category</td>
            <td><input type="text" id='category'></td>
        </tr>
        <tr>
            <td>Enter Product sub category</td>
            <td><input type="text" id='subcat'></td>
        </tr>
        <tr>
            <td>Enter Product color</td>
            <td><input type="text" id='color'></td>
        </tr>
        <tr>
            <td>Enter Product price</td>
            <td><input type="number" id='price'></td>
        </tr>
        <tr>
            <td><button id='add'>Add</button><td>
        </tr>
    </table>

    <div>
        <button id='see'> See Products </button>
    </div>

    <script>
        $(document).ready(function(){
            $('#add').click(function(){
                let name = $('#name').val();
                let category = $('#category').val();
                let subcat = $('#subcat').val();
                let price = $('#price').val();
                let color = $('#color').val();
                $.ajax({
                    type: 'POST',
                    url:'server.php',
                    data:{
                        add:'add',
                        n:name,
                        c:category,
                        sc:subcat,
                        p:price,
                        co:color
                    },
                    success: function(data){
                        alert("Successfully added");
                    }
                })
            })
            $('#see').click(function(){
                location.href = 'display.php';
            })
        });
    </script>
</body>
</html>
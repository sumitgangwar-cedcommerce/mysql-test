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
    <div>
        <input type="text" id='inp'>
        <select id='ser'>
            <option value=''>SELECT</option>
            <option value='1'>Product Id</option>
            <option value='2'>Product Name</option>
            <option value='3'>Product Category</option>
            <option value='4'>Product Sub Category</option>
            <option value='5'>Product Price</option>
            <option value='6'>Product Color</option>
        </select><span id='err'></span>
        <button id='search'>Search</button>
    </div>

    <div id='res'></div>

    <script>
        $(document).ready(function(){
            $.ajax({
                type:'POST',
                url:'server.php',
                data:{
                    see :'see'
                },
                success: function(response){
                    $('#res').html(response)
                }
            })
            $('#search').click(function(){
                $txt = $('#inp').val();
                $ser = $('#ser').val();
                $.ajax({
                    type:'POST',
                    url:'server.php',
                    data:{
                        ssee :'s_see',
                        txt:$txt,
                        ser:$ser
                    },
                    success: function(response){
                        $('#res').html(response)
                    }
                })
            })
        })
    </script>
</body>
</html>
<?php

    include 'sql_conn.php';

    if(isset($_POST['add'])){
        $n = $_POST['n'];
        $c = $_POST['c'];
        $sc = $_POST['sc'];
        $p = $_POST['p'];
        $co = $_POST['co'];

        $sql = "INSERT INTO product(pro_name,pro_category,pro_sub_category,pro_color,pro_price) VALUES('$n','$c','$sc','$co','$p')";
        $conn->query($sql);
    }

    if(isset($_POST['see'])){
        $sql = "SELECT * FROM product";

        echo '<table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Sub Category</th>
                </tr>';

        foreach($conn->query($sql) as $row){
            echo '<tr>
                    <td>'.$row['pro_id'].' </td>
                    <td>'.$row['pro_name'].' </td>
                    <td>'.$row['pro_category'].' </td>
                    <td>'.$row['pro_price'].' </td>
                    <td>'.$row['pro_color'].' </td>
                    <td>'.$row['pro_sub_category'].' </td>
                </tr>';
        }

        echo '</table>';
    }

    if(isset($_POST['ssee'])){
        $txt = $_POST['txt'];
        $ser = $_POST['ser'];

        if($ser=='1')  $ser = 'pro_id';
        else if($ser=='2') $ser = 'pro_name';
        else if($ser=='3') $ser = 'pro_category';
        else if($ser=='4') $ser = 'pro_sub_category';
        else if($ser=='5') $ser = 'pro_price';
        else $ser = 'pro_color';

        $sql = "SELECT * FROM product WHERE $ser = '$txt'";

       

        // echo $sql;

        echo '<table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Sub Category</th>
                </tr>';

        foreach($conn->query($sql) as $row){
            echo '<tr>
                    <td>'.$row['pro_id'].' </td>
                    <td>'.$row['pro_name'].' </td>
                    <td>'.$row['pro_category'].' </td>
                    <td>'.$row['pro_price'].' </td>
                    <td>'.$row['pro_color'].' </td>
                    <td>'.$row['pro_sub_category'].' </td>
                </tr>';
        }

        echo '</table>';

    }

?>
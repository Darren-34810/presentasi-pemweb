<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        } );
    </script>
</head>
<body>
    <?php
        $products = array (
            "1" => array (
                "name" => "Chai",
                "qpu" => "10 boxes x 20 bags",
                "price" => 18.0000,
                "stock" => 39
            ),
            "2" => array (
                "name" => "Chang",
                "qpu" => "24 - 12 oz bottles",
                "price" => 19.0000,
                "stock" => 17
            ),
            "3" => array (
                "name" => "Aniseed Syrup",
                "qpu" => "12 - 550 ml bottles",
                "price" => 10.0000,
                "stock" => 13
            ),
            "4" => array (
                "name" => "Chef Anton's Cajun Seasoning",
                "qpu" => "48 - 6 oz jars",
                "price" => 22.0000,
                "stock" => 53
            ),
            "5" => array (
                "name" => "Chef Anton's Gumbo Mix",
                "qpu" => "36 boxes",
                "price" => 21.3500,
                "stock" => 0
            )
        );
    ?>
    <div class="container" style="padding: 12px">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class= "navbar-header">
                    <a class="navbar-brand" href="#">[IF430] Web Programming</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Products</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="border: 1px #ccc solid; border-radius: 5px; padding: 8px">
            <table id="productTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Quantity per Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($products as $id => $detail){
                            echo "<tr><td>$id</td>";
                            foreach($detail as $val){
                                echo "<td>$val</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

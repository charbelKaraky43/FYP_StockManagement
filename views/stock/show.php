<?php
include('../layouts/boilerplate.php');
include('../functions.php');
if (!empty($_GET['itemNumber'])) {
    $itemNumber = $_GET['itemNumber'];
    $jsonData = checkStockDetails($con, $itemNumber);
    $data = json_decode($jsonData, true);
    $stockDetails = $data['stock_details'];
    $sql = "SELECT item_name,item_image,item_description FROM itemmaster WHERE item_number=$itemNumber";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header('location:../error.php');
    exit();
};
?>
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between">
        <div class="media align-items-center m-b-15">
            <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                <img src="../../assets/<?php echo $row['item_image']; ?>" alt="">
            </div>
            <div class="m-l-15">
                <h4 class="m-b-0"><?php echo $row['item_name']; ?></h4>
                <p class="text-muted m-b-0">Item Code: #<?php echo $itemNumber; ?></p>
                <p class="text-muted m-b-0">Shelf Code: #<?php echo $stockDetails[0]['shelf_num'];; ?></p>
                <p class="text-muted m-b-0">Unit Price: $<?php echo $stockDetails[0]['primary_unit_price']; ?></p>
            </div>
        </div>
        <div class="m-b-15">
            <button class="btn btn-primary" id="exportButton">
                <i class="anticon anticon-file-excel"></i>
                <span>Export</span>
            </button>
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#product-overview">Overview</a>
        </li>
    </ul>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="myTable" class="table table-hover text-center mx-auto">
                <thead>
                    <tr>
                        <th scope=" col">#</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Expiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($stockDetails as $item) {
                        $i++;
                        echo '<tr>
                            <th scope="row">' . $i . '</th>
                            <td>' . $item['primary_quantity_batch'] . '</td>
                            <td>' . $item['item_expiry_date'] . '</td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include('../layouts/boilerplate_footer.php');
?>
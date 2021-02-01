<?php
include("dbFunctions.php");

$items = array();
$query = "SELECT * FROM items order by item_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gadget Shop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=ARumW6pj-y1u7dfjBer-TVXty40io3aZRxszVFAdSki_B2QX8ZQR58uYnXL49XZLEXDBfwK8EKwkA2Qe&components=buttons"></script>
         <style>
            form .error {
                color: #ff0000;
            }
        </style>

        <script type="text/javascript">
          $(document).ready(function() {
            var items = <?php echo json_encode($items); ?>;
            $("button").click(function() {
              $("[name=itemname]").val(items[Number($(this).val())-1].name);
              $("[name=itemprice]").val(items[Number($(this).val())-1].price);
              $("#item_modal").modal("show");
            });
          });
          paypal.Buttons({
            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{
                  desciption: $("[name=itemname]").val(),
                  amount: {
                    value: $("[name=itemprice]").val()
                  }
                }]
              });
            },
            onApprove: function (data, actions) {
              return actions.order.capture().then(
                function (details) {
                  var msg = 'Transaction comp leted by ' + details.payer.name.given_name + '<br/>';
                  msg += 'Total: ' + details.purchase_unit[0].amount.value;
                  $('result').html(msg)
                });
            }
          }).render('#paypal-button-container');
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Gadget Shop</h3>

            <div id="msg"></div>
            <div id="products" class="row">
                <?php
                for ($i = 0; $i < count($items); $i++) {
                    ?>
                    <div class="col-3 mb-5">
                        <div class="card"><div class="card-body">
                                <div class="text-center">
                                    <img src="images/<?php echo $items[$i]["image"] ?>"/>
                                    <h4><?php echo $items[$i]["name"] ?></h4>
                                    <p class="text-primary"><?php echo $items[$i]["price"] ?></p>
                                    <button class="btn btn-success" value="<?php echo $items[$i]["item_id"] ?>">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Bootstrap modal -->
        <div class="modal fade" id="item_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Item Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input name="itemname" class="form-control" type="text" readonly>
                            </div>
                            <div class="form-group">
                                <label>Item Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">SGD</span>
                                    </div>
                                    <input name="itemprice" class="form-control" type="text" readonly>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Item Quantity</label>
                                <input name="itemqty" class="form-control" type="number" value="1" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <div id="paypal-button-container"></div>
                          <div id="result"></div>
                        </div>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->

    </body>
</html>

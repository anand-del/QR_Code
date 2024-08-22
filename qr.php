<div class="content">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Enter information to generate QR Code</div>
            <div class="panel-body">
                <div class="input_field_wrapper">
                    <div>
                        <form method="post">
                            <input type="text" name="item_id" value="" required />
                            <input type="text" name="item_num" value="" required />
                            <input type="text" name="item_age" value="" required />
                            <input type="submit" class="btn btn-primary" value="Generate QR Code" style="margin:5px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <?php
    // Load the QR library
    include 'phpqrcode/qrlib.php';

    if (isset($_POST['item_id']) && isset($_POST['item_num']) && isset($_POST['item_age'])) {
      // Data to be stored in QR code
      $item_id = $_POST['item_id'];
      $item_num = $_POST['item_num'];
      $item_age = $_POST['item_age'];

      // Combine the data into one string
      $item = "ID: $item_id, Number: $item_num, Age: $item_age";

      // File path
      $file = "images/qr1.png";

      // Other parameters
      $ecc = 'H';
      $pixel_size = 20;
      $frame_size = 5;

      // Generate QR Code and save as PNG
      QRcode::png($item, $file, $ecc, $pixel_size, $frame_size);

      // Displaying the stored QR code
      echo "<div><h3>Generated QR Code for {$item}</h3><br><img src='{$file}' width='150'></div>";
    }
    ?>
    </div>
</div>
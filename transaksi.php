<?php
$Cust = array("Wawan LPG 12 Kilo", "Kurnia Basreng Jeruk Nipis", "Naufal Pulpen Pilot", "Hesti Ban Serep", "Hendri Alpenliebe Lollipop");

$Barang = array("Mie Instan", "Sabun Mandi", "Shampoo", "Sendal Jepit", "Roti", "Buku Tulis", "Susu Kotak", "Minyak Goreng", "Ice Cream", "Baterai");
$Harga = array("Mie Instan"=>3000, "Sabun Mandi"=>3500, "Shampoo"=>1000, "Sendal Jepit"=>11000, "Roti"=>12000, "Buku Tulis"=>5500, "Susu Kotak"=>6000, "Minyak Goreng"=>13000, "Ice Cream"=>11000, "Baterai"=>16000);
$QTY1 = 0;
$QTY2 = 0;
$QTY3 = 0;

include 'header.php';

if(isset($_POST['submit'])){
    $Kode = $_POST['kode'];
    $Tanggal = $_POST['date'];
    $Customer = $_POST['customer'];
    $Product1 = $_POST['product1'];
    $Product2 = $_POST['product2'];
    $Product3 = $_POST['product3'];
    $QTY1 = $_POST['QTY1'];
    $QTY2 = $_POST['QTY2'];
    $QTY3 = $_POST['QTY3'];
    $Member = $_POST['member'];
    $Uang = $_POST['bayar'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <p>Kode-Transaksi</p>
        </div>
        <div class="col-sm-2">
            <?php
            echo $Kode;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <p>Tanggal Transaksi</p>
        </div>
        <div class="col-sm-2">
        <?echo
            echo $Tanggal;
        ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <p>Customer</p>
        </div>
        <div class="col-sm-2">
                <?php
                echo $Customer;
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <p>Barang 1</p>
        </div>
        <div class="col-sm-2" style="margin-right:50px">
                <?php
                echo $Product1;
                ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <p>Barang 2</p>
        </div>
        <div class="col-sm-2" style="margin-right:50px">
        <?php
        echo $Product2;
        ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <p>Barang 3</p>
        </div>
        <div class="col-sm-2" style="margin-right:50px">
        <?php
        echo $Product3;
        ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <p>Uang Pembayaran</p>
        </div>
        <div class="col-sm-2">
        Rp. <?php $Uang; ?>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <p>Member?</p>
        </div>
        <div class="col-sm-2">
        <?php
        echo $Member;
        ?>
        </div>
    </div>
</div>
    </body>
    </html>

    <?php
}

else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Transaksi Page</title>
</head>
<body>
    <center><h1>Laman Transaksi Kasir</h1></center>
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <p>Kode-Transaksi</p>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="kode">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p>Tanggal Transaksi</p>
                </div>
                <div class="col-sm-2">
                <input name="date" type="date" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p>Customer</p>
                </div>
                <div class="col-sm-2">
                    <select name="customer">
                        <option selected="selected">--Pilih customer--</option>
                        <?php
                        foreach($Cust as $cust)
                        echo "<option value='strtolower($cust)'>$cust</option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <p>Barang 1</p>
                </div>
                <div class="col-sm-2" style="margin-right:50px">
                    <select name="product1">
                        <option selected="selected">--Pilih Barang 1--</option>
                        <?php
                        foreach($Barang as $item1)
                        echo "<option value='strtolower($item1)'>$item1</option>";
                        ?>
                    </select>
                </div><input class="col-sm-1" type="number" name="QTY1" value="QTY1" placeholder="QTY">
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <p>Barang 2</p>
                </div>
                <div class="col-sm-2" style="margin-right:50px">
                    <select name="product2">
                        <option selected="selected">--Pilih Barang 2--</option>
                        <?php
                        foreach($Barang as $item2)
                        echo "<option value='strtolower($item2)'>$item2</option>";
                        ?>
                    </select>
                </div><input class="col-sm-1" type="number" name="QTY2" value="QTY2" placeholder="QTY">
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <p>Barang 3</p>
                </div>
                <div class="col-sm-2" style="margin-right:50px">
                    <select name="product3">
                        <option selected="selected">--Pilih Barang 3--</option>
                        <?php
                        foreach($Barang as $item3)
                        echo "<option value='strtolower($item3)'>$item3</option>";
                        ?>
                    </select>
                </div><input class="col-sm-1" type="number" name="QTY3" value="QTY3" placeholder="QTY">
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <p>Uang Pembayaran</p>
                </div>
                 
                <div class="col-sm-2">
                Rp. <input class="col-sm-2" type="number" name="bayar" value="bayar" placeholder="Pembayaran" style="margin:auto; width:300px;">
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <p>Apakah Memiliki Member?</p>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="member" value="Yes">Yes
                    <input type="radio" name="member" value="No">No
                </div>
            </div>
            <center>
            <div class=row>
                <div class="col-sm-2">
                    <input name="btnSubmit" type="submit" value="Proses" style="background-color:green; color:white ;width: auto; padding: 10px 18px; margin: 10px 5px;">
                </div>
                
                <div class="col-sm-2">
                    <input name="reset" type="reset" value="Cancel" style="background-color:red;color:white ;width: auto; padding: 10px 18px; margin: 10px 5px;">
                </div>
            </div>
</center>
        </div>
    </form>
</body>
</html>

<?php
}
include 'footer.php';

?>
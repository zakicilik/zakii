<form method="get">
    <input type="text" nama="nama">
    <button type="sumbit">kirim</button> 
</form>

<?php
if (isset($_GET['NAMA'])){
    $nama = $_GET['NAMA'];
    echo "helo $nama semaga kamu sukses";
}
?>
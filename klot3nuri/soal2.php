<?php
if(!isset($_POST['proses']) && !isset($_POST['bayar'])&& !isset($_POST['akhir'])){
  echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Nama Barang</td><td><input type="text" name="nama"></td></tr>
 <tr><td>Harga Barang</td><td><input type="text" name="harga"></td></tr>
 <tr><td>Jumlah Barang</td><td><input type="text" name="jumlah"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';  
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $nama = $_POST['nama'];
 $harga = $_POST['harga'];
 $jumlah = $_POST['jumlah'];
 $total_harga = $harga*$jumlah;
echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Total Harga</td><td><input type="text" name="total_harga1" value="'.$total_harga.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $total_harga1 = $_POST['total_harga1'];
 $jumlahUang = $_POST['jumlahUang'];
 $uang=$jumlahUang-$total_harga1;

echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahuang" value="'.$jumlahUang.'" readonly></td></tr>
 <td></td>
 <tr><td>Jumlah Kembalian</td><td><input type="text" name="uang" value="'.$uang.'" readonly></td></tr>
 </center>';


 if ($uang < 100){
                        echo "Uang tidak boleh kurang dari 100 rupiah";
                    }else {
                         echo "
                             <p>
                         <table class = 'table' border=0>
                         <tr>
                             <th>
                                 Lembar
                             </th>
                             <th>
                                 Pecahan
                             </th>
                         </tr>

                     ";

                        if ( $uang >= 100000){
                        $nilai_uang = floor(($uang / 100000));

                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td>Uang Rp 100.000</td>
                             </tr>
                        
                        ";
                        }
                        $uang = $uang % 100000;
                        if ( $uang >= 50000 && $uang < 100000){
                        $nilai_uang = floor(($uang / 50000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td>Uang Rp 50.000</td>
                             </tr>
                        
                        ";
                        }
                        $uang = $uang % 50000;
                        if ( $uang >= 20000 && $uang < 500000){
                        $nilai_uang = floor(($uang / 20000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td>Uang Rp 20.000</td>
                             </tr>
                        
                        ";
                        }
                        $uang = $uang % 20000;
                        if ( $uang >= 10000 && $uang < 20000){
                        $nilai_uang = floor(($uang / 10000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td>Uang Rp 10.000</td>
                             </tr>
                        
                        ";
                        }
                        $uang = $uang % 10000;
                        if ( $uang >= 5000 && $uang < 10000){
                        $nilai_uang = floor(($uang / 5000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td>Uang Rp 5000</td>
                             </tr>
                        
                        ";
                        }
                        $uang = $uang % 5000;
                        if ( $uang >= 2000 && $uang < 5000){
                            $nilai_uang = floor(($uang / 2000));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td>Uang Rp 2000</td>
                             </tr>
                             ";
                        }
                        $uang = $uang % 2000;
                        if ( $uang >= 1000 && $uang < 2000){
                            $nilai_uang = floor(($uang / 1000));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td>Uang Rp.1000</td>
                             </tr>
                             ";
                        }
                        $uang = $uang % 1000;
                        if ( $uang >= 500 && $uang < 1000){
                            $nilai_uang = floor(($uang / 500));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td>Uang Rp 500</td>
                             </tr>
                             ";
                        }
       
                        echo "</table>";
                    }
 
 



}
?>
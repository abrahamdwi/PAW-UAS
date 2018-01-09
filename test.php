<?php

class tes extends PHPUnit_Framework_TestCase
{
        function testFile()
        {
                include "koneksi.php";
                $query=mysqli_query($conn,"SELECT * FROM user");
                $user = mysqli_num_rows($query);
                $content1 = $user;
            
                $this->assertEquals(3, $content1);
        }

        function testusernama()
        {
                include "koneksi.php";
        	$query = mysqli_query($conn,"SELECT * FROM user where id = 28 ");
                $user = mysqli_fetch_array($query);
                $usernya = $user['username'];
                $content2=$usernya;

            	$this->assertEquals('bramsok',$content2);
        }

         function testnamabarang()
        {
               include "koneksi.php";

                $query = mysqli_query($conn,"SELECT * FROM barang where nama_barang = 'honda cb500'");
                $user = mysqli_fetch_array($query);
                $usernya = $user['usia'];

                $content3 = $usernya;
                $this->assertEquals('70',$content3);
        }

         function testemail()
        {

               include "koneksi.php";
                $query = mysqli_query($conn,"SELECT * FROM user where username = 'adinnn'");
                $user = mysqli_fetch_array($query);
                $usernya = $user['email'];
                $content4 = $usernya;
                $this->assertEquals('adin@m.c',$content4);
        }

       /* function testhargabarng(){
                include "koneksi.php";
                $query = mysqli_query($conn,"SELECT * FROM keranjang WHERE id=25");
                $user = mysqli_num_rows($query);
                $usernya=$user['nama_barang'];
                $content5 = $usernya;
                $this->assertEquals('Norton G1000',$content5);
        }

        function testlowongan_nama(){
                include '../koneksi/koneksi.php';
                $login = pg_query($connection,"SELECT nama_perusahaan FROM lowongan Inner JOIN perusahaan on lowongan.id_perusahaan = perusahaan.id_perusahaan WHERE judul_lowongan = 'azharloper' ");
                $user = pg_fetch_array($login);
                $usernya = $user['nama_perusahaan'];
                $content = $usernya;
                $this->assertEquals('afif',$content);
        }*/
}

?>
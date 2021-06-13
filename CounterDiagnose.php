<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diagnoser Hard Disk Drive | HDD Test Diagnostics Software</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="dist/css/animate.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        
    </head>


    <body class="bg-light">
		<div class="container text-center mt-3 pt-3">
        <div class="col-sm-2" valign="bottom">
            <script>
              
                $(document).ready(function(){
                    $("#tampil").modal('show');
                });

            </script>
			</div>
		
        <!-- MODAL BOOTSRAP + ANIMATE.CSS -->
        <div class="modal fade" id="tampil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
			   
			<div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalCenterTitle">
                <i class="fas fa-check-circle"></i>
                <span class="brand-text font-weight-light"><b>Diagnosed !!!</b></span>
                </h2>
                
            </div>

            <div class="modal-body">
                <p class= "text-justify">
            <?php
                include "koneksi.php";


                $nama = array($_POST['Nama'],$_POST['NamaHD']);
                $poin = 17;
                $nilai = array(5,1,3,3,3,2);
                $total = array($_POST['total'],$_POST['totalB'],$_POST['totalC'],$_POST['totalD'],$_POST['totalE'],$_POST['totalF']);
                $k = sizeof($total);
                


                #kategori kerusakan
                $kategori = array("Harddisk Bad Sector","Harddisk berisik","Harddisk failure","Harddisk Macet Saat Loading Windows","Invalid Partition Table","Post Error");
                $penyebab = array("listrik mati, listrik naik turun karena tidak ada stabilizer, dan komputer sering direset",
                                "motor harddisk lemah, head harddisk lemah, beberapa piringan sudah tergores, dan saat memasang harddisk kurang tepat",
                                "kabel harddisk kendor, kabel IDE belum terpasang, dan boot harddisk mati",
                                "boot file corrupts, setting drive harddisk salah, device boot tidak di set dengan benar, setting BIOS tidak normal, koneksi dengan harddisk terputus, dan harddisk mengalami kerusakan",
                                "boot mati dan partisi hilang",
                                "time out, pencarian gagal, adapter harddisk mengalami kerusakan, tidak menemukan record, gagal melakukan penulisan, track 0 error, kesalahan pemilihan head, pengujian tidak efektif, buffer pembacaan berlebihan, kerusakan pada tanda pengalamatan, kesalahan tidak bisa ditentukan, kesalahan dalam perbandingan data, harddisk tidak siap, disk 0 gagal, disk 1 gagal, dan adapter harddisk rusak");
                $solusi = array("gunakan stabilizer, perbaiki grounding listrik, dan gunakan power supply asli",
                "upayakan memasang harddisk dengan tepat dan mematikan harddisk saat tidak aktif dipakai",
                "check pada setup BIOS apakah masih bisa mendeteksi harddisk, jika tidak dikenali maka check kembali sambungan kabel harddisk dengan benar. Jika dikenali kemungkinan yang rusak adalah partisi atau format harddisk",
                "lakukan booting ulang, setting drive salah (jika perlu lakukan kembali proses auto detect), pastikan divice boot tidak di set dengan benar, dan lakukan setting ulang BIOS sesuai default perusahaan",
                "partisi ulang harddisk tersebut",
                "Terdapat beberapa kesalahan yang terjadi pada saat proses POST, dimana kesalahan tersebut menandakan terjadinya masalah dengan harddisk");

                //mencari nilai bobot dan hasil dari pembobotan 
                for ($hitung=0; $hitung < $k; $hitung++) { 
                    $jumlah[$hitung] = $total[$hitung] / (($poin - $nilai[$hitung]) * 0.5 + $nilai[$hitung]);
                    
                    // hitungan lama jika nilai bobot memakai dari (poin-total)\bagi2 + total dengan cara dibawah ini.
                    //$jumlah[$hitung] = $total[$hitung] / (($poin - $total[$hitung]) * 0.5 + $total[$hitung]);
                   
                    //jika ingin menampilkan hasil hitung dari similarity dengan dibawah ini
                    #echo "Hasil similarity dari kategori gejala $hitung adalah : ".number_format($jumlah[$hitung],2)."<br>"; 
                }
                
                // mencari nilai kemiripan yang paling besar dari hasil pembobotan 
                $temp = 0;
                $q = 0;
                $akhir = "";

                for ($index=1; $index < $k; $index++) {
                    
                    if ($jumlah[$temp] < $jumlah[$index]) {
                        $temp = $index; 

                    }elseif($jumlah[$temp] == $jumlah[$index] && $jumlah[$index]!=0){
                       
                        $akhir[$q] = $index;
                        $q++;
                    }else{ }

                //kalau mau liat jejak looping pakai dibawah ini 
                #echo " sementara adalah :  $temp | $index";
                } 

                # isi konten dari kerusakan
                echo "Customer Name : $nama[0] <br>
                Hard Disk Name : $nama[1] <br>
                <br>Kerusakan : $kategori[$temp] <br>
                Penyebab: $penyebab[$temp] <br>
                Solusi: $solusi[$temp] <br>";

                // jika ada hasil yg kembar
                if ($akhir) {
                    for ($a=0; $a < $q ; $a++) { 
                        if ($jumlah[$temp]==$jumlah[$akhir[$a]]) {
                            
                            #menampilkan hasil similarity
                            //echo "<br> Hasil perhitungan similarity terbesar adalah : ".number_format($jumlah[$akhir[$a]],2); ;
                            
                            $Tkategori = " & ".$kategori[$akhir[$a]];
                            $Tsolusi = " & ".$solusi[$akhir[$a]];

                            echo "<br>Dan<br><br>Kerusakan : ".$kategori[$akhir[$a]]."<br>
                            Penyebab: ".$penyebab[$akhir[$a]]."<br>
                            Solusi: ".$solusi[$akhir[$a]]. "<br>";
                        }
                    }
                }

                //Mengecek hasil similarity 
                #echo "<br> Hasil perhitungan similarity terbesar adalah : ".number_format($jumlah[$temp],2)."<br>";
                
                #input ke sql
                if ($akhir) {
                    mysqli_query($koneksi,"INSERT INTO pelanggan VALUES ('','$nama[0]','$nama[1]','$kategori[$temp] $Tkategori','$solusi[$temp] $Tsolusi')") or die(mysqli_error());
                }else {
                    mysqli_query($koneksi,"INSERT INTO pelanggan VALUES ('','$nama[0]','$nama[1]','$kategori[$temp]','$solusi[$temp]')") or die(mysqli_error());
                }
                
                
               

                

                
                ?>
                </p>
            </div>
            <div class="modal-footer">
            <a href="customer.php"><button type="button" class="btn btn-secondary"  > Close</button></a>
            </div>
            
        </div>
            </div>
                </div>
					
				</div>
				
            </div>
        </div>
        <!-- END BOOTSRAP + ANIMATE.CSS -->
    </div>

   

	<script type="text/javascript">
		function testAnim() {
		    $('.modal .modal-dialog').attr('class', 'modal-dialog  bounceIn  animated');
		};
		$('#tampil').on('show.bs.modal', function (e) {
		  var anim = $('#entrance').val();
		      testAnim();
		})
	</script>
		
	</body>
</html>

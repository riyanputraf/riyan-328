<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label >
            <span>Nama</span>
            <?php echo isset($_POST['submit']) && empty($_POST['nama'] && !is_numeric($_POST['nama'])) ? "<span class='text-sm text-red-400'>Nama is required</span>" : " "?> 
            <input type="text" name="nama" id="nama" class="ring-1 ring-blue-400 px-4 rounded">
        </label> <br>
        <label >
            <span>No.Telp</span>
            <?php echo isset($_POST['submit']) && empty($_POST['phone'] && is_numeric($_POST['phone'])) ? "<span class='text-sm text-red-400'>Phone is required</span>" : ""?> 

            <input type="text" name="phone" id="phone">
        </label> <br>
        <label >
            <span>Tanggal Berangkat</span>
            <?php echo isset($_POST['submit']) && empty($_POST['tggl'] && !is_numeric($_POST['tggl'])) ? "<span class='text-sm text-red-400'>Tggl is required</span>" : ""?> 

            <input type="date" name="tggl" id="tggl">
        </label> <br>
        <label >
            <span>Stasiun Asal</span>
            <?php echo isset($_POST['submit']) && empty($_POST['asal'] && !is_numeric($_POST['asal'])) ? "<span class='text-sm text-red-400'>Asal is required</span>" : ""?> 

            <select name="asal" id="asal">
            <option value="malang">Malang</option>
            </select>
        </label> <br>
        <label >
            <span>Stasiun Tujuan</span>
            <?php echo isset($_POST['submit']) && empty($_POST['tujuan'] && !is_numeric($_POST['tujuan'])) ? "<span class='text-sm text-red-400'>Tujuan is required</span>" : ""?> 

            <select name="tujuan" id="tujuan">
            <option value="jakarta">Jakarta</option>
			<option value="yogya">Yogya</option>
			<option value="solo">Solo</option>
            <option value="bandung">Bandung</option>
            </select>
        </label> <br>
        <label >
            <span>Banyak orang</span>
            <?php echo isset($_POST['submit']) && empty($_POST['banyak'] && is_numeric($_POST['banyak'])) ? "<span class='text-sm text-red-400'>Banyak is required</span>" : ""?> 

            <input type="text" name="banyak" id="banyak">
        </label> <br>
        <span>
            <input type="submit" id="submit" value="submit" name="submit">
        </span>
    </form>

    <?php
				$nama = $asal =  $tujuan = $tggl = $banyak = $phone = $bayar = "";
						
				session_start();
				if(isset($_POST['submit'])){
					if(!is_numeric($_POST["nama"]) && is_numeric($_POST["phone"]) && $_POST["tggl"] != '' && (is_numeric($_POST["banyak"]) && (!empty($_POST["banyak"]) && $_POST["banyak"] > 0 && is_numeric($_POST["banyak"])))){
						$nama = $_POST["nama"];
						$phone = $_POST["phone"];
						$tggl = date("d/m/Y", strtotime($_POST["tggl"]));
						$asal = $_POST["asal"];
						$tujuan = $_POST["tujuan"];
						$banyak = $_POST["banyak"];

                       

						if($asal=="malang" && $tujuan=="yogya"){
							$bayar = 100000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="jakarta"){
							$bayar = 150000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="solo"){
							$bayar = 110000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="bandung"){
							$bayar = 120000 * $banyak;
						}

						$_SESSION['schedules'][] = compact('nama','phone','tggl','asal','tujuan','banyak','bayar');
						echo '
							<script>
								document.getElementById("submit").click();
							</script>
						';
					}

					
				}
			?>


<?php if(isset($_SESSION['schedules']) && !empty($_SESSION['schedules'])): ?>
				<div class="space-y-4">
					<?php foreach($_SESSION['schedules'] as $schedule): ?>
						<div class="flex w-full py-4 px-6 justify-between shadow-sm bg-pink-50 rounded space-x-4">
							<div class="flex flex-col w-[18em]">
								<?php foreach($schedule as $name => $value): ?>
									<?php if($name == 'nama' || $name == 'phone' || $name == 'tggl' || $name == 'asal'): ?>
										<label class="flex w-full">
											<p class="capitalize w-[7em] font-semibold"><?= $name ?></p>
											<p class="w-full"><?= $value ?></p>
										</label>
									<?php endif?>
								<?php endforeach; ?>
							</div>
							<div class="flex flex-col w-[18em]">
                                <!-- menampilkan tiap data (tujuan, banyak, dan harga tiket) -->
								<?php foreach($schedule as $name => $value): ?>
									<?php if($name == 'tujuan' || $name == 'banyak' || $name == 'bayar'): ?>
										<label class="flex w-full">
											<p class="capitalize w-[7em] font-semibold"><?= $name ?></p>
											<p class="w-full"><?= $value ?></p>
										</label>
									<?php endif?>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif ?>



</body>
</html>
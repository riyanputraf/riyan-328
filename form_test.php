<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <main class="flex justify-center w-full items-center my-24">
  <form method="post" class="w-2/5 rounded shadow px-8 min-h-[5em] flex-col py-10" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="space-y-4">
        <label  class="flex flex-col">
          <span> Nama </span>
          <?php echo isset($_POST['submit']) && empty($_POST['nama'] && !is_numeric($_POST['nama'])) ? "<span class='text-sm text-red-400'>Nama is required</span>" : ""?> 
          <input <?php echo isset($_POST['submit']) && empty($_POST['nama'] && !is_numeric($_POST['nama'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> type="text" name="nama" id="nama" class="ring-1 ring-blue-400 px-4 rounded" placeholder="Nama">
        </label>
        <label  class="flex flex-col">
          <span> No.Telp</span>
          <?php echo isset($_POST['submit']) && empty($_POST['phone'] && is_numeric($_POST['phone'])) ? "<span class='text-sm text-red-400'>Phone is required</span>" : ""?> 
					<input <?php echo isset($_POST['submit']) && empty($_POST['phone'] && is_numeric($_POST['phone'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="phone" id="phone" type="text"/>
          <!-- <input type="text" name="phone" id="phone" class="ring-1 ring-blue-400 px-4 rounded" placeholder="No.HP"> -->
        </label>
        <label  class="flex flex-col">
          <span> Tanggal</span>
          <?php echo isset($_POST['submit']) && empty($_POST['tggl'] && !is_numeric($_POST['tggl'])) ? "<span class='text-sm text-red-400'>Tggl is required</span>" : ""?> 
					<input <?php echo isset($_POST['submit']) && empty($_POST['tggl'] && !is_numeric($_POST['tggl'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="tggl" id="tggl" type="date" />

          <!-- <input type="date" name="tggl" id="tggl" class="ring-1 ring-blue-400 px-4 rounded" placeholder="No.HP"> -->
        </label>
        <label for="" class="flex flex-col ">
          <span for="asal"> Stasiun Asal </span>
          <?php echo isset($_POST['submit']) && empty($_POST['asal'] && !is_numeric($_POST['asal'])) ? "<span class='text-sm text-red-400'>Asal is required</span>" : ""?> 

          <select name="asal" id="asal" class="ring-1 ring-blue-400 px-4 rounded" id="asal">
            <option value="malang">Malang</option>
          </select>
        </label>
        <label for="" class="flex flex-col ">
          <span for="tujuan"> Stasiun Tujuan </span>
          <?php echo isset($_POST['submit']) && empty($_POST['tujuan'] && !is_numeric($_POST['tujuan'])) ? "<span class='text-sm text-red-400'>Tujuan is required</span>" : ""?> 

          <select name="tujuan" id="tujuan" class="ring-1 ring-blue-400 px-4 rounded">
              <option value="jakarta">Jakarta</option>
							<option value="yogya">Yogya</option>
							<option value="solo">Solo</option>
							<option value="semarang">Semarang</option>
          </select>
        </label>
        <label class="flex flex-col">
          <span> Banyak Orang</span>
          <?php echo isset($_POST['submit']) && empty($_POST['banyak'] && is_numeric($_POST['banyak'])) ? "<span class='text-sm text-red-400'>Banyak is required</span>" : ""?> 
					<input <?php echo isset($_POST['submit']) && empty($_POST['banyak'] && is_numeric($_POST['banyak'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="banyak" id="banyak" type="text" />

          <!-- <input type="text" name="banyak" id="banyak" class="ring-1 ring-blue-400 px-4 rounded" placeholder="Banyak Orang"> -->
        </label>
        
      </div>
    
        <span class="mt-7">
        <input class="w-full ring-1 ring-blue-400 px-4 rounded  " id="submit" type="submit" name="submit"
				value="submit" />        </span>
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
							$bayar = 400000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="solo"){
							$bayar = 110000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="semarang"){
							$bayar = 120000 * $banyak;
						}

						$_SESSION['schedules'][] = compact('nama','phone','tggl','asal','tujuan','banyak','bayar');
						echo '
							<script>
								document.getElementById("submit").click();
							</script>
						';
					}

					// print_r($_SESSION);
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


  </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

	<link rel="stylesheet" href="/assets/css/tailwind.css">
	<link rel="stylesheet" href="/assets/css/ez.css">
	<title></title>
</head>
<body>
	<main class="flex justify-center w-full font-sans items-start space-x-6 my-24">
		<form method=”post” class="w-2/5 rounded shadow px-8 min-h-[5em] flex-col py-10" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<span class="text-[1.3em] font-sans text-center font-bold text-blue mb-6">
				Booking Tiket Kereta Api
			</span>
			<div class="space-y-4">
				<label class="flex-col">
					<div class="flex justify-between">
						<span>Nama</span>
						<?php echo isset($_GET['submit']) && empty($_GET['nama'] && !is_numeric($_GET['nama'])) ? "<span class='text-sm text-red-400'>Nama is required</span>" : ""?> 
					</div>
					<input <?php echo isset($_GET['submit']) && empty($_GET['nama'] && !is_numeric($_GET['nama'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="nama" id="nama" type="text"/>
				</label>
				<label class="flex-col">
					<div class="flex justify-between">
						<span>No.Telp</span>
						<?php echo isset($_GET['submit']) && empty($_GET['phone'] && is_numeric($_GET['phone'])) ? "<span class='text-sm text-red-400'>Phone is required</span>" : ""?> 
					</div>
					<input <?php echo isset($_GET['submit']) && empty($_GET['phone'] && is_numeric($_GET['phone'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="phone" id="phone" type="text"/>
				</label>
				<label class="flex-col">
					<div class="flex justify-between">
						<span>Tanggal Berangkat</span>
						<?php echo isset($_GET['submit']) && empty($_GET['tggl'] && !is_numeric($_GET['tggl'])) ? "<span class='text-sm text-red-400'>Tggl is required</span>" : ""?> 
					</div>
					<input <?php echo isset($_GET['submit']) && empty($_GET['tggl'] && !is_numeric($_GET['tggl'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="tggl" id="tggl" type="date" />
				</label>
				<label class="flex-col">
					<div class="flex justify-between">
						<span for="asal">Stasiun Asal</span>
						<?php echo isset($_GET['submit']) && empty($_GET['asal'] && !is_numeric($_GET['asal'])) ? "<span class='text-sm text-red-400'>Asal is required</span>" : ""?> 
					</div>
						<select name="asal" class="form-select appearance-none block h-6 p-1 px-2 bg-clip-padding bg-no-repeat border border-solid border-blue-300 rounded-sm focus:rounded focus:border-2 focus:border-blue-300 focus:outline-none" id="asal">
							<option value="malang">Malang</option>
						</select>
				</label>
				<label class="flex-col">
					<div class="flex justify-between">
						<span for="tujuan">Stasiun Tujuan</span>
						<?php echo isset($_GET['submit']) && empty($_GET['tujuan'] && !is_numeric($_GET['tujuan'])) ? "<span class='text-sm text-red-400'>Tujuan is required</span>" : ""?> 
					</div>
						<select name="tujuan" class="form-select appearance-none block h-6 p-1 px-2 bg-clip-padding bg-no-repeat border border-solid border-blue-300 rounded-sm focus:rounded focus:border-2 focus:border-blue-300 focus:outline-none" id="tujuan">
							<option value="jakarta">Jakarta</option>
							<option value="yogya">Yogya</option>
							<option value="solo">Solo</option>
							<option value="semarang">Semarang</option>
						</select>
				</label>
				<label class="flex-col">
					<div class="flex justify-between">
						<span>Banyak Orang</span>
						<?php echo isset($_GET['submit']) && empty($_GET['banyak'] && is_numeric($_GET['banyak'])) ? "<span class='text-sm text-red-400'>Banyak is required</span>" : ""?> 
					</div>
					<input <?php echo isset($_GET['submit']) && empty($_GET['banyak'] && is_numeric($_GET['banyak'])) ? 'class="h-6 rounded-sm p-1 px-2 ring-1 bg-red-100 ring-red focus:outline-none focus:ring-2 focus:ring-darkred text-sm"' : 'class="h-6 rounded-sm p-1 px-2 ring-1 ring-blue focus:outline-none focus:ring-2 focus:ring-darkblue text-sm"' ?> placeholder="ex: Lorem Ipsum"  name="banyak" id="banyak" type="text" />
				</label>
			</div>
			<span class="mt-7">
				<input class="w-full bg-pink rounded-sm text-white ring-1 ring-pink h-6 text-sm font-medium" id="submit" type="submit" name="submit"
				value="submit" />
			</span>
		</form>
		<div class="w-2/5 rounded shadow px-8 min-h-[38.2em] flex-col py-10">
			<span class="text-[1.3em] font-sans text-center font-bold text-pink mb-6">
				Schedule List
			</span>
			<?php
				$nama = $asal =  $tujuan = $tggl = $banyak = $phone = $bayar = "";
						
				session_start();
				if(isset($_GET['submit'])){
					if(!is_numeric($_GET["nama"]) && is_numeric($_GET["phone"]) && $_GET["tggl"] != '' && (is_numeric($_GET["banyak"]) && (!empty($_GET["banyak"]) && $_GET["banyak"] > 0 && is_numeric($_GET["banyak"])))){
						$nama = $_GET["nama"];
						$phone = $_GET["phone"];
						$tggl = date("d/m/Y", strtotime($_GET["tggl"]));
						$asal = $_GET["asal"];
						$tujuan = $_GET["tujuan"];
						$banyak = $_GET["banyak"];

						if($asal=="malang" && $tujuan=="yogya"){
							$bayar = 100000 * $banyak;
						}
						if($asal=="malang" && $tujuan=="jakarta"){
							$bayar = 150000 * $banyak;
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
		</div>
	</main>
</body>
</html>
<div class="container">
    <h1 class="h3 mb-2 text-gray-800">Form Update Agenda (<?php echo $DataAgenda['nama_acara']; ?>)</h1>
    <hr style="border: 0.2px solid grey;">
    <form action="<?php echo base_url() ?>ControllersDataAgenda/EditData/<?php echo $IdAgenda; ?>" method="POST">
        <label for="nama_acara" id="nama_acara" class="form-label">Nama Acara</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
            <input type="hidden" name="id" value="<?php echo $IdAgenda; ?>">
            <input type="text" class="form-control" id="nama_acara" name="nama_acara" value="<?php echo $DataAgenda['nama_acara']; ?>" 
            required oninvalid="this.setCustomValidity('Nama Acara Tidak Boleh Kosong')" oninput="setCustomValidity('')" autofocus>
        </div>

        <label for="jam_acara" class="form-label">Jam Acara</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2"><i class="far fa-clock"></i></span>
            <input type="time" class="form-control" id="jam_acara" name="jam_acara" value="<?php echo $DataAgenda['jam_acara']; ?>" 
            required oninvalid="this.setCustomValidity('Jam Acara Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>

        <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3"><i class="fas fa-calendar-week"></i></span>
            <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" value="<?php echo $DataAgenda['tanggal_acara']; ?>" 
            required oninvalid="this.setCustomValidity('Tanggal Acara Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>

        <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" value="<?php echo $DataAgenda['penanggung_jawab']; ?>" 
            required oninvalid="this.setCustomValidity('Penanggung Jawab Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>

        <label for="ruangan" class="form-label">Ruangan (<?php echo $DataAgenda['ruangan']; ?>)</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6"><i class="fas fa-building"></i></span>
            <select class="form-control" name="ruangan" id="ruangan" required oninvalid="this.setCustomValidity('Ruangan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                <option value="">---Silahkan Pilih---</option>
                <option value="Ruang Space Room">Ruang Space Room</option>
                <option value="Ruang Kepala">Ruang Kepala</option>
                <option value="Ruang Sekretaris">Ruang Sekretaris</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
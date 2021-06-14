<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Tambah Kehadiran</h1>
    <hr style="border: 0.2px solid grey;">
    <form action="<?php echo base_url() ?>ControllersKehadiran/EditData/<?php echo $IdKehadiran; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $IdKehadiran; ?>">
        <label for="kepala" class="form-label">Kehadiran Kepala Bappeda (<?php echo $DataKehadiran['kepala']; ?>)</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-building"></i></span>
            <select class="form-control" name="kepala" id="kepala" required oninvalid="this.setCustomValidity('Kepala Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                <option value="">---Silahkan Pilih---</option>
                <option value="Kepala Bappeda Ada">Kepala Bappeda Ada</option>
                <option value="Kepala Bappeda Tidak Ada">Kepala Bappeda Tidak Ada</option>
            </select>
        </div>

        <label for="sekretariat" class="form-label">Kehadiran Sekretariat (<?php echo $DataKehadiran['sekretariat']; ?>)</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-building"></i></span>
            <select class="form-control" name="sekretariat" id="sekretariat" required oninvalid="this.setCustomValidity('Sekretariat Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                <option value="">---Silahkan Pilih---</option>
                <option value="Sekretariat Ada">Sekretariat Ada</option>
                <option value="Sekretariat Tidak Ada">Sekretariat Tidak Ada</option>
            </select>
        </div>

        <label for="kepala_bidang_ekonomi" class="form-label">Kehadiran Kepala Bidang Ekonomi (<?php echo $DataKehadiran['kepala_bidang_ekonomi']; ?>)</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-building"></i></span>
            <select class="form-control" name="kepala_bidang_ekonomi" id="kepala_bidang_ekonomi" required oninvalid="this.setCustomValidity('Kepala Bidang Ekonomi Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                <option value="">---Silahkan Pilih---</option>
                <option value="Kepala Bidang Ekonomi Ada">Kepala Bidang Ekonomi Ada</option>
                <option value="Kepala Bidang Ekonomi Tidak Ada">Kepala Bidang Ekonomi Tidak Ada</option>
            </select>
        </div>

        <label for="tanggal" class="form-label">Tanggal</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3"><i class="fas fa-calendar-week"></i></span>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required oninvalid="this.setCustomValidity('Tanggal Tidak Boleh Kosong')" oninput="setCustomValidity('')">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
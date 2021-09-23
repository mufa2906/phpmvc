<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Form Tambah Data
      </button>
      <br>
      <h3>Tambah Data Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <?= $mhs['nama']; ?>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary">Detail</a>
        </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name='nama'>
          </div>
          <div class="mb-3">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name='nrp'>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name='email'>
          </div>
          <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name='jurusan'>
              <option value="Teknik Biomedik">Teknik Biomedik</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Komputer">Teknik Komputer</option>

            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
      </div>
    </div>
  </div>
</div>
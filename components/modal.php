<!-- Modal tambah barang -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_barang" required placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="harga" required placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="stok" required placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="diskon" required placeholder="Diskon">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jenis" required placeholder="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Pilih Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-sm text-white"  style="background-color: #7d5fff;">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal tambah barang -->

<!-- Modal edit barang -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" value="#" required placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" value="#" required placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" value="#" required placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <input type="number" class="form-control" id="diskon" value="#" required placeholder="Diskon">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" class="form-control" id="jenis" value="#" required placeholder="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-sm text-white"  style="background-color: #7d5fff;">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal edit barang -->

<!-- Modal hapus barang -->
<div class="modal fade" id="hapus">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Anda Ingin Menghapus Data?</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <form action="#" method="POST">
                    <input type="hidden" name="id" value="#">
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger btn-sm">Ya, Hapus</button>
                    </div>
            </form>
      </div>
    </div>
</div>
<!-- End Modal hapus barang -->
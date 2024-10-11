<div class="form-container">
        <h2>Tambah Barang</h2>
        <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" name="stok" id="stok" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" name="harga" id="harga" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
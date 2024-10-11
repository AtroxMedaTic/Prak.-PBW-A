<div class="form-container">
        <h2>Edit Barang</h2>
        <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
            <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required>
            </div>
            <button type="submit">Update</button>
        </form>
</div>

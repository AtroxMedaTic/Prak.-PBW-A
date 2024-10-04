<div class="admin-container">
        <h2>Halaman Admin</h2>
        <div class="admin-actions">
            <a href="<?= BASEURL; ?>index.php?url=admin/add" class="btn">Tambah Barang</a> 
            <a href="<?= BASEURL; ?>index.php?url=login/logout" class="btn-logout">Logout</a>
        </div>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($data['items'] as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['stok']; ?></td>
                <td><?= $item['harga']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>" class="edit-btn">Edit</a> |
                    <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" class="delete-btn" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
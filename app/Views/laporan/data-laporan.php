<?= $this->extend('layout/menu'); ?>
<?= $this->section('judul'); ?>


<?= $this->endSection() ?>

<?= $this->section('isi') ?>

<!-- ========== tables-wrapper start ========== -->
<div class="table table-sm table-striped">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h3 class="mt-30">Laporan Produk</h3>
                <div class="text-start">

                    <div class="btn-print mt-30">
                        <a href="<?= site_url('/pdf_view'); ?>" class="btn btn-primary">Print PDF</a>
                    </div>
                    </form>
                    <div class="table table-sm table-striped mt-30">
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                if (isset($listProduk)) :
                                    $no = 0; // inisialisasi nomor
                                    foreach ($listProduk as $baris) :
                                        $no++;
                                ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $baris->nama_produk ?></td>
                                            <td><?= $baris->harga_beli ?></td>
                                            <td><?= $baris->harga_jual ?></td>
                                            <td><?= $baris->stok ?></td>
                                        </tr>
                                <?php
                                    endforeach;
                                endif;
                                ?>

                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
                            </div>
        <!-- end row -->

        <?= $this->endSection(); ?>
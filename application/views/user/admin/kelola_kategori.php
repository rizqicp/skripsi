<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core Meta Data -->
    <?php $this->load->view("_partials/meta") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("_partials/sidebar") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("_partials/topbar") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kelola Kategori</h1>
                    <?= $this->session->flashdata('message'); ?>

                    <!-- DataTables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a class="btn btn-primary" href="<?= base_url('admin/tambahkategori') ?>">Tambah Kategori</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabel-kategori" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kependekan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("_partials/footer") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("_partials/scrollTop") ?>
    <!-- Logout Modal-->
    <?php $this->load->view("_partials/logoutModal") ?>

    <!-- Core Script Data -->
    <?php $this->load->view("_partials/script") ?>

    <!-- Custom Script -->
    <script>
        $(document).ready(function() {
            tabel = $('#tabel-kategori').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= base_url('admin/getkategori') ?>",
                    "type": "POST"
                },
                "columns": [{
                        "data": "no",
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "nama"
                    },
                    {
                        "data": "kependekan"
                    },
                    {
                        "data": "aksi"
                    },
                ],
                "columnDefs": [{
                        "targets": [0, 3],
                        "orderable": false
                    },
                    {
                        "targets": [0, 3],
                        "className": "text-center"
                    }
                ]
            });
        });
    </script>

</body>

</html>
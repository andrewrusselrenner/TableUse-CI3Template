    <!-- Popper.js -->
    <script src="<?= npmURL(); ?>popper.js/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?= npmURL(); ?>bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SweetAler2 JS nya, pengganti BS Modal -->
    <script src="<?= npmURL(); ?>sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Untuk plugin JqueryDataTabel -->
    <script src="<?= jsURL(); ?>jquery.dataTables.min.js"></script>

    <!-- Untuk plugin JquertDataTabel juga, tapi semenjak kita make Bootstrap, jadi stylingnya gak pake bawaan pluginnya. -->
    <script src="<?= jsURL(); ?>dataTables.bootstrap4.min.js"></script>
    
    <!-- Kostum JavaScript yang dibuat untuk modal -->
    <script src="<?= jsURL(); ?>mhsmodal.js"></script>

    <?php
    if ($this->session->userdata('status') == TRUE)
    {
        ?>
        <script>
        Swal.fire({
        position: 'bottom-end',
        backdrop: false,
        type: 'success',
        title: 'Sukses diproses!',
        showConfirmButton: false,
        timer: 1900
        })
        </script>
        <?php
    }
    ?>
    <script>
    // Inisialisasi plugin JqueryDataTable
    /*
    $(document).ready(function() {
        $('#tabelMahasiswa').DataTable({
            "language": {
                "url": "<?= jsURL(); ?>indonesian-gaul.json"
            }
        });
    });
    */

    // Atur variabel global yang bakal dipake disemua fungsi 
    // di javascript bair gak cape ngetik
    var uri = "<?= base_url(); ?>mahasiswa/";
    </script>
</body>
</html>
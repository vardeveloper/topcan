<script type="text/javascript">
    var MyTable = $('#list-data').dataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });

    window.onload = function () {
        tampilPegawai();
        tampilPosisi();
        tampilKota();
<?php
if ($this->session->flashdata('msg') != '') {
    echo "effect_msg();";
}
?>
    }

    function refresh() {
        MyTable = $('#list-data').dataTable();
    }

    function effect_msg_form() {
        // $('.form-msg').hide();
        $('.form-msg').show(1000);
        setTimeout(function () {
            $('.form-msg').fadeOut(1000);
        }, 3000);
    }

    function effect_msg() {
        // $('.msg').hide();
        $('.msg').show(1000);
        setTimeout(function () {
            $('.msg').fadeOut(1000);
        }, 3000);
    }

    function tampilPegawai() {
        $.get('<?php echo base_url('Productos/tampil'); ?>', function (data) {
            MyTable.fnDestroy();
            $('#data-product').html(data);
            refresh();
        });
    }

    // product delete
    var product_id;
    $(document).on("click", ".product-delete-pegawai", function () {
        product_id = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataPegawai", function () {
        var id = product_id;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Productos/delete'); ?>",
            data: "id=" + id
        }).done(function (data) {
            $('#product-delete').modal('hide');
            tampilPegawai();
            $('.msg').html(data);
            effect_msg();
        })
    })

    // product update open modal
    $(document).on("click", ".update-dataProduct", function () {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Productos/update'); ?>",
            data: "id=" + id,
        }).done(function (data) {
            $('#tempat-modal').html(data);
            $('#update-product').modal('show');
        })
    })

    $('#form-product').submit(function (e) {
    
        //var formData = new FormData(document.getElementById("form-product"));
        var formData = new FormData(this);
        //var data = $(this).serialize();
        console.log(formData);

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Productos/create'); ?>',
            data: formData,
            processData: false,
            contentType: false,
        }).done(function (data) {
            var out = jQuery.parseJSON(data);
            tampilPegawai();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-product").reset();
                $('#product').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    // product update save
    $(document).on('submit', '#form-update-product', function (e) {
        //var data = $(this).serialize();
        var data = new FormData(this);

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Productos/prosesUpdate'); ?>',
            data: data,
            processData: false,
            contentType: false,
        })
        .done(function (data) {
            var out = jQuery.parseJSON(data);

            tampilPegawai();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-product").reset();
                $('#update-product').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });

    $('#product').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

    $('#update-product').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

    //Kota
    function tampilKota() {
        $.get('<?php echo base_url('Categorias/tampil'); ?>', function (data) {
            MyTable.fnDestroy();
            $('#data-kota').html(data);
            refresh();
        });
    }

    var id_kota;
    $(document).on("click", ".konfirmasiHapus-kota", function () {
        id_kota = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataKota", function () {
        var id = id_kota;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Kota/delete'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#konfirmasiHapus').modal('hide');
                    tampilKota();
                    $('.msg').html(data);
                    effect_msg();
                })
    })

    $(document).on("click", ".update-dataKota", function () {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Categorias/update'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#tempat-modal').html(data);
                    $('#update-kota').modal('show');
                })
    })

    $(document).on("click", ".detail-dataKota", function () {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Kota/detail'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#tempat-modal').html(data);
                    $('#tabel-detail').dataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                    $('#detail-kota').modal('show');
                })
    })

    $('#form-tambah-kota').submit(function (e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Kota/prosesTambah'); ?>',
            data: data
        })
                .done(function (data) {
                    var out = jQuery.parseJSON(data);

                    tampilKota();
                    if (out.status == 'form') {
                        $('.form-msg').html(out.msg);
                        effect_msg_form();
                    } else {
                        document.getElementById("form-tambah-kota").reset();
                        $('#tambah-kota').modal('hide');
                        $('.msg').html(out.msg);
                        effect_msg();
                    }
                })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-kota', function (e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Kota/prosesUpdate'); ?>',
            data: data
        })
                .done(function (data) {
                    var out = jQuery.parseJSON(data);

                    tampilKota();
                    if (out.status == 'form') {
                        $('.form-msg').html(out.msg);
                        effect_msg_form();
                    } else {
                        document.getElementById("form-update-kota").reset();
                        $('#update-kota').modal('hide');
                        $('.msg').html(out.msg);
                        effect_msg();
                    }
                })

        e.preventDefault();
    });

    $('#tambah-kota').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

    $('#update-kota').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

    //Posisi
    function tampilPosisi() {
        $.get('<?php echo base_url('Tipocategoria/tampil'); ?>', function (data) {
            MyTable.fnDestroy();
            $('#data-posisi').html(data);
            refresh();
        });
    }

    var id_posisi;
    $(document).on("click", ".konfirmasiHapus-posisi", function () {
        id_posisi = $(this).attr("data-id");
    })
    $(document).on("click", ".hapus-dataPosisi", function () {
        var id = id_posisi;

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Tipocategoria/delete'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#konfirmasiHapus').modal('hide');
                    tampilPosisi();
                    $('.msg').html(data);
                    effect_msg();
                })
    })

    $(document).on("click", ".update-dataPosisi", function () {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Tipocategoria/update'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#tempat-modal').html(data);
                    $('#update-posisi').modal('show');
                })
    })

    $(document).on("click", ".detail-dataPosisi", function () {
        var id = $(this).attr("data-id");

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Posisi/detail'); ?>",
            data: "id=" + id
        })
                .done(function (data) {
                    $('#tempat-modal').html(data);
                    $('#tabel-detail').dataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false
                    });
                    $('#detail-posisi').modal('show');
                })
    })

    $('#form-tambah-posisi').submit(function (e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Tipocategoria/prosesTambah'); ?>',
            data: data
        })
                .done(function (data) {
                    var out = jQuery.parseJSON(data);

                    tampilPosisi();
                    if (out.status == 'form') {
                        $('.form-msg').html(out.msg);
                        effect_msg_form();
                    } else {
                        document.getElementById("form-tambah-posisi").reset();
                        $('#tambah-posisi').modal('hide');
                        $('.msg').html(out.msg);
                        effect_msg();
                    }
                })

        e.preventDefault();
    });

    $(document).on('submit', '#form-update-posisi', function (e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Tipocategoria/prosesUpdate'); ?>',
            data: data
        })
                .done(function (data) {
                    var out = jQuery.parseJSON(data);

                    tampilPosisi();
                    if (out.status == 'form') {
                        $('.form-msg').html(out.msg);
                        effect_msg_form();
                    } else {
                        document.getElementById("form-update-posisi").reset();
                        $('#update-posisi').modal('hide');
                        $('.msg').html(out.msg);
                        effect_msg();
                    }
                })

        e.preventDefault();
    });

    $('#tambah-posisi').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

    $('#update-posisi').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })



    // product categories update open modal
    $(document).on("click", ".update-dataCategories", function () {
        var id = $(this).attr("data-id");
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('Productos/relationCategory'); ?>",
            data: "id=" + id,
        }).done(function (data) {
            $('#tempat-modal').html(data);
            $('#update-productCategories').modal('show');
        })
    })
    
    // product update save
    $(document).on('submit', '#form-update-productCategory', function (e) {
        var data = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '<?php echo base_url('Productos/updateCategories'); ?>',
            data: data,
        })
        .done(function (data) {
            var out = jQuery.parseJSON(data);

            tampilPegawai();
            if (out.status == 'form') {
                $('.form-msg').html(out.msg);
                effect_msg_form();
            } else {
                document.getElementById("form-update-productCategory").reset();
                $('#update-productCategories').modal('hide');
                $('.msg').html(out.msg);
                effect_msg();
            }
        })

        e.preventDefault();
    });
    
    $('#update-productCategories').on('hidden.bs.modal', function () {
        $('.form-msg').html('');
    })

</script>
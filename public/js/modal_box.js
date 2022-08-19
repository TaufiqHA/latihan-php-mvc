$(function()
{
    $('#button2_modal').on('click', function()
    {
        $('#modal_label').html('tambah data mahasiswa');
        $('#modal_button').html('tambah');
    })

    $('.tampil_modal_ubah').on('click', function()
    {
        $('#modal_box').removeClass('hidden_modal');
        $('#modal_box').addClass('set_modal');
        $('#modal_label').html('ubah data mahasiswa');
        $('#modal_button').html('ubah');

        const id = $(this).data('id');

        $.ajax({
            url: "http://localhost:8080/latihan-php-mvc/public/mahasiswa/getUbah",
            data: {id : id},
            method: "post",
            dataType: "json",
            success: function(data)
            {
                console.log(data);
            }
        })
    })
})
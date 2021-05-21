/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    $("#save_form").on('click', function (e) {
        e.preventDefault();
        let user_id = $("input[id=user_id]").val();
        let code = $("#editor-tab").html();
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "store",
            type: "POST",
            data: {
                user_id: user_id,
                form_code: code,
                _token: _token
            },
            success: function (response) {
//                console.log(response);
                if (response) {
                    alert("Sucess");
                    window.location.replace("/forms");
                }
            },
        });
    });

    $(document).ready(function () {
        if ($("input[id=id]").val() != null && $("input[id=id]").val() != 'undifiend' && $("input[id=id]").val() > 0) {
            $.ajax({
                url: "/read/" + $("input[id=id]").val(),
                type: "GET",
                success: function (response) {
                    if (response) {
                        $("#editor-tab").html(response);
                    }
                },
            });
        }
    });
    
    $("#update_form").on('click', function (e) {
        e.preventDefault();
        let id = $("#id").val();
        let user_id = $("input[id=user_id]").val();
        let code = $("#editor-tab").html();
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/update/"+id,
            type: "POST",
            data: {
                id: id,
                user_id: user_id,
                form_code: code,
                _token: _token
            },
            success: function (response) {
//                console.log(response);
                if (response) {
                    alert("Sucess");
                    window.location.replace("/forms");
                }
            },
        });
    });
});

$(document).ready(function () {
    $('#nameinvalid').hide();
    $('#uninvalid').hide();
    $('#pasinvalid').hide();
    $('#cpasinvalid').hide();

    $('#nm').keyup(function () {
        name_check();
    });
    function name_check() {

        var name_val = $('#nm').val();
        if (name_val.trim() == "") {
            $('#nameinvalid').show();
            $('#nameinvalid').html('Name Cannot be Empty');
            $('#nameinvalid').focus();
            $('#nameinvalid').css("color", "red");
            name_error = false;
            return false;
        } else {
            $('#nameinvalid').hide();
        }

        if (name_val.length < 3) {
            $('#nameinvalid').show();
            $('#nameinvalid').html('Name is too Short');
            $('#nameinvalid').focus();
            $('#nameinvalid').css("color", "red");
            name_error = false;
            return false;
        } else {
            $('#nameinvalid').hide();
        }
    }

    $('#pas').keyup(function () {
        pas_check();
    });
    function pas_check() {
        var pas_val = $('#pas').val();
        if (pas_val.trim() == "") {
            $('#pasinvalid').show();
            $('#pasinvalid').html('Password Cannot be Empty');
            $('#pasinvalid').focus();
            $('#pasinvalid').css("color", "red");
            pas_error = false;
            return false;
        } else {
            $('#pasinvalid').hide();
        }

        if ((pas_val.length < 3) || (pas_val.length > 20)) {
            $('#pasinvalid').show();
            $('#pasinvalid').focus();
            $('#pasinvalid').html('Password Must be Between 3-20 Characters');
            $('#pasinvalid').css("color", "red");
            pas_error = false;
            return false;
        } else {
            $('#pasinvalid').hide();
        }

    }
    $('#cpas').keyup(function () {
        cpas_check();
    });
    function cpas_check() {
        var cpas_val = $('#cpas').val();
        var pas_val = $('#pas').val();

        if (cpas_val.trim() == "") {
            $('#cpasinvalid').show();
            $('#cpasinvalid').html('This Fiesld Cannot be Empty');
            $('#cpasinvalid').focus();
            $('#cpasinvalid').css("color", "red");
            cpas_error = false;
            return false;
        } else {
            $('#cpasinvalid').hide();
        }

        if (pas_val != cpas_val) {
            $('#cpasinvalid').show();
            $('#cpasinvalid').focus();
            $('#cpasinvalid').html('Passwords are not Matching');
            $('#cpasinvalid').css("color", "red");
            cpas_error = false;
            return false;
        } else {
            $('#cpasinvalid').hide();
        } l
    }


    $('#un').keyup(function () {
        un_check();
    });
    function un_check() {
        var un_val = $('#un').val();

        if (un_val.trim() == "") {
            $('#uninvalid').show();
            $('#uninvalid').html('This Fiesld Cannot be Empty');
            $('#uninvalid').focus();
            $('#uninvalid').css("color", "red");
            un_error = false;
            return false;
        } else {
            $('#uninvalid').hide();
        }
        if ((un_val.length < 4) || (un_val.length > 15)) {
            $('#uninvalid').show();
            $('#uninvalid').focus();
            $('#uninvalid').html('Username Must be Between 3-20 Characters');
            $('#uninvalid').css("color", "red");
            un_error = false;
            return false;
        } else {
            $('#uninvalid').hide();
        }
    }

    $('#submitbtn').click(function () {
        name_error = true;
        pas_error = true;
        cpas_error = true;
        un_error = true;

        name_check();
        pas_check();
        cpas_check();
        un_check();

        if ((name_check == true) && (pas_check == true)
            && (cpas_check == true) && (un_check == true)) {
            return true;
        }
        else {
            return false;
        }

    });

});
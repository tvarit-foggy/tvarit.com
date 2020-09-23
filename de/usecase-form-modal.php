<script type="text/javascript" language="javascript">
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}
$("#btnUsecase").live("click", function() {
    var isAccepted = $('#isAccept').is(':checked');
    if ($("#nameUsecase").val() !== "" && $("#comUsecase").val() !== "" && $("#emailUsecase").val() !== "" && isAccepted) {
        if (!IsEmail($("#emailUsecase").val())) {
            var e = document.getElementById("emailValidationUsecase");
            e.className = "show";
            setTimeout(function() {
                e.className = e.className.replace("show", "");
            }, 3000);
            return;
        }
        var name = $("#nameUsecase").val();
        var email = $("#emailUsecase").val();
        var company = $("#comUsecase").val();
        var phone = $("#phoneUsecase").val();
        var x = document.getElementById("snackbarUsecase");
        $.ajax({
            type: "POST",
            url: "./useCaseMail?page=<?php echo $isFor; ?>",
            data: "name=" + name + '&email=' + email + '&company=' + company + '&phone=' + phone,
            success: function(data) {
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
                $('#nameUsecase').val('');
                $('#emailUsecase').val('');
                $('#comUsecase').val('');
                $('#phoneUsecase').val('');
                $('#myModal').modal('hide');
            }
        });
    } else {
        var y = document.getElementById("validationUsecase");
        y.className = "show";
        setTimeout(function() {
            y.className = y.className.replace("show", "");
        }, 3000);
    }

});
</script>
<style>
#snackbarUsecase {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbarUsecase.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#validationUsecase {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#validationUsecase.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;

}

#emailValidationUsecase {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;

}

#emailValidationUsecase.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@keyframes fadein {
    from {
        bottom: 0;
        opacity: 0;
    }

    to {
        bottom: 30px;
        opacity: 1;
    }
}

@keyframes fadeout {
    from {
        bottom: 30px;
        opacity: 1;
    }

    to {
        bottom: 0;
        opacity: 0;
    }
}
</style>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Get Use-Case for <?php echo $isFor; ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="formBox w-100">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="nameUsecase" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="emailUsecase" placeholder="Email *">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phoneUsecase" placeholder="Phone"
                            onkeypress='validate(event)'>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="company" id="comUsecase" placeholder="Company *">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="isAccept" checked="">
                            <label class="custom-control-label" for="isAccept">I agree to download the usecase.</label>
                        </div>
                    </div>
                    <div id="emailValidationUsecase">Email is Incorrect</div>
                    <div id="snackbarUsecase">We Will Contact you Shortly</div>
                    <div id="validationUsecase">Fill All the Mandatory Fields</div>
                    <br>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" value="Submit" id="btnUsecase" class="btnmodal btn-round btn-red-grd">
                <input type="button" value="Close" data-dismiss="modal" class="btnmodal btn-round btn-red-grd">
            </div>
        </div>
    </div>
</div>
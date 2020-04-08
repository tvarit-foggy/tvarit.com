<script type="text/javascript" language="javascript">
$("#btn").live("click", function() {
    if ($("#name").val() !== "" && $("#email").val() !== "" && $("#phone").val() !== "") {
        var name = $("#name").val();
        var email = $("#email").val();
        var sub = $("#sub").val();
        var phone = $("#phone").val();
        var msg = $("#msg").val();
        var x = document.getElementById("snackbar");
        $.ajax({
            type: "POST",
            url: "/useCaseMail",
            data: "name=" + name + '&email=' + email + '&sub=' + sub + '&phone=' + phone + '&msg=' +
                msg,
            success: function(data) {
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
                $('#name').val('');
                $('#email').val('');
                $('#sub').val('');
                $('#phone').val('');
                $('#msg').val('');
            }
        });
    } else {
        var y = document.getElementById("validation");
        y.className = "show";
        setTimeout(function() {
            y.className = y.className.replace("show", "");
        }, 3000);
    }

});
</script>
<style>
#snackbar {
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

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#validation {
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

#validation.show {
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
                <h4 class="modal-title">Usecase <?php echo $isFor; ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="formBox w-100">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
                    </div>
                    <div class="form-row">
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="sub" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone *"
                                    onkeypress='validate(event)'>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="msg" id="msg" placeholder="Message"></textarea>
                    </div>
                    <br>
                    <!-- <div class="form-group text-right">
                                <input type="button" value="Submit" id="btn" class="btn btn-round btn-red-grd">
                            </div> -->
                    <div id="snackbar">We Will Contact you Shortly</div>
                    <div id="validation">Fill All the Mandatory Fields</div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" value="Submit" id="btn" class="btn btn-round btn-red-grd">
                <input type="button" value="Close" data-dismiss="modal" class="btn btn-round btn-red-grd">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
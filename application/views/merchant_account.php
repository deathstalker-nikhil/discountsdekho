<?php echo $head; ?>
<section id="merchant">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">MERCHANT ACCOUNT</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="/home/merchantLogin" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-Mail Address" name="email" required>
                            </div>
                            <div class="form-group">
                                <input required type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                                <a data-toggle="modal" href="#merchant_forgot_password">Forgot your password?</a>
                                <button type="submit" class="btn btn-xl1" style="float:right;">Login</button>
                            </div>
                            <a style="float: right; top-margin: 10px;" href="/merchant_register">Don't have a account, signup here!</a>
                        </form>    
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="merchant_forgot_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Forgot your Password?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/assets/img/forget_Password.png" width="100%" style="text-align: center;">
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group" style="margin-top: 50px;">
                            <form class="forgotPasswordForm" onsubmit="return false;" method="post">               
                                <label>Registered E-Mail Address</label>
                                <input type="email" required class="form-control" name="email" placeholder="Enter E-Mail Address">
                                <input type="hidden" name="type" value="merchant">
                                <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                                <button type="submit" class="btn btn-primary" style="float:right; margin:5px; 0px;">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?=$foot?>
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/agency.js"></script>
<script src="/assets/js/custom.js"></script>
</body>
</html>

<br>
<div class="container">
<div class="row padding3">
    <div class="col-md-12 col-sm-12 col-md-7 border bordering bg-color4 border-radius-3 padding1">
        <div class="row widget bordering">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <br/>
                <h3 class="text-center t-color3"><?php echo "20 Years of Experience.";?></h3><hr class="border3">
                <?php @session_start();?>
                <style>
                .customclass{
                    display:none;
                }
                </style>
                <?php $_SESSION['token'] = md5(microtime()); ?>
                <form action="contact2.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="t_black"><i class="fa fa-user"></i> Name <span class="required">*</span></label>
                                    <input required type="text"
                                                    value=""
                                                    data-msg-required="Please enter your name."
                                                    class="form-control"
                                                    name="name" id="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="t_black"><i class="fa fa-envelope"></i> Email <span class="required">*</span></label>
                                    <input required type="email" 
                                                    value=""
                                                    data-msg-required="Please enter your email address."
                                                    data-msg-email="Please enter a valid email address."
                                                    class="form-control"
                                                    name="email"
                                                    id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="t_black"><i class="fa fa-phone"></i> Phone <span class="required">*</span></label>
                                    <input required type="tel"
                                                    maxlength="12"
                                                    minlength="10" 
                                                    value=""
                                                    data-msg-required="Please enter the phone."
                                                    class="form-control"
                                                    name="phone"
                                                    id="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 pt-0">
                                <label class="t_black"><i class="fa fa-check"></i> Write the Code</label>
                                <input class="form-control" type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                                <img src="captcha.php" /><br>
                                <input name="captcha" class="form-control" type="text" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="t_black"><i class="fa fa-file"></i> Subject <span class="required">*</span></label>
                                    <input required type="text"
                                                    value=""
                                                    data-msg-required="Please enter the subject."
                                                    class="form-control"
                                                    name="subject"
                                                    id="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="t_black"><i class="fa fa-comment"></i> Message <span class="required">*</span></label>
                                    <textarea
                                    data-msg-required="Please enter your message."
                                    rows="4"
                                    class="form-control"
                                    name="message"
                                    id="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type="submit" value="Send Message" style="padding: 7px; background-color: #2d2;" class="btn btn-sm bg-color2" data-loading-text="Loading...">
                            <br><br/>
                        </div>
                    </div>
                    <input type="hidden" name="url" id="dir"/>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<br>
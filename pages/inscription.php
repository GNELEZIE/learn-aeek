<?php
if(isset($_SESSION['_userivoirebox3647'])){
    header('location:'.$domaine.'/dashboard');
    exit();
}
$myIp =  Detect::ip();
$result = json_decode(getDataByUrl('http://ip-api.com/json/'.$myIp),true);
if($result['status'] == 'success'){
    $countryCode = $result['countryCode'];
}else{
    $countryCode = '';
}

require_once $controller.'/client.inscription.php';

$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

require_once $layout.'/auth/header.php';
?>
    <body class="body-bg-f8faff">

    <div class="account-area bg-f8faff">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="account-content box-shadow-1">
                        <div class="account-header">
                            <img src="<?=$cdn_domaine?>/media/logo.png" class="logo-auth" alt="main-logo">
                            <h3 class="pb-3">Nouveau compte</h3>
                        </div>

                        <form class="account-wrap" id="formRegister" method="post">
                            <?php if(!empty($errors)){ ?>
                                <div class="alert alert-danger font-12 p-2" style="font-size: 14px" role="alert">
                                    <?php foreach($errors as $error){ ?>
                                        <?php echo $error ?>
                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="form-group mb-24 icon">
                                <input type="tel" class="form-control style-input" id="phone" name="phone" required>
                                <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                            </div>
                            <div class="form-group mb-24 icon">

                                <i class="fa fa-lock icon-input" aria-hidden="true"></i>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>

                            </div>
                            <div class="form-group mb-24">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label font-10" for="flexCheckDefault">
                                        En cochant, vous acceptez les conditions d'utilisation <a href="#">conditions d'utilisation</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-24">
                                <button type="submit" class="btn-jaune-transparent"><i class="registerLoad"></i> Inscription</button>
                            </div>
                            <div class="form-group mb-24">
                                <p class="account font-13 text-center">Vous avez déja un compte ? <a href="<?=$domaine?>/connexion">Connexion</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once $layout.'/auth/footer.php';?>
    <script>
        $(document).ready(function(){
            $('#formRegister').submit(function(){
                $('.registerLoad').html('<i class="loader-btn"></i>');
            });



            $("#phone").keyup(function (event) {
                if (/\D/g.test(this.value)) {
                    //Filter non-digits from input value.
                    this.value = this.value.replace(/\D/g, '');
                }
            });

            var inputPhone = document.querySelector("#phone");
            window.intlTelInput(inputPhone, {
                initialCountry: '<?=$countryCode?>',
                utilsScript: "<?=$cdn_domaine?>/assets/libs/intltelinput/js/utils.js"
            });
            var iti = window.intlTelInputGlobals.getInstance(inputPhone);
            var countryData = iti.getSelectedCountryData();
            $('#isoPhone').val(countryData["iso2"]);
            $('#dialPhone').val(countryData["dialCode"]);
            inputPhone.addEventListener("countrychange", function() {
                var iti = window.intlTelInputGlobals.getInstance(inputPhone);
                var countryData = iti.getSelectedCountryData();
                $('#isoPhone').val(countryData["iso2"]);
                $('#dialPhone').val(countryData["dialCode"]);
            });

        });
    </script>
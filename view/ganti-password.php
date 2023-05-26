<?php
include 'header.php';
?>

<style>
.container-password {
    width: 90%;
}

.show-hide {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #777575;
    padding: 5px;
    cursor: pointer;
}

/* Desktop Version */
@media (min-width: 992px) {
    .container-password {
        width: 480px;
    }
}
</style>

<main>
    <div class="container container-fluid">
        <div class="title">
            <h3 class="text-gray-800 my-2">Ganti Password </h3>
        </div>
        <div class="subtitle border-bottom mb-4 pb-2">
            <span class=""><a href="index">Beranda </a></span>
            <span class="text-grey"> / Ganti password</span>
        </div>
    </div>
    <div class="container-password container-fluid">
        <section class="form-login">
            <div class="row form-login">
                <form action="proses/ganti-password-proses.php" method="POST" class="form-control form-login shadow">
                    <div class="row form-login-header border-bottom mb-4 shadow-sm">
                        <div class="col">
                            <h5 class="text-center mt-2">Masukkan!</h5>
                            <h6 class="text-center mb-4">Password Baru dan Password Konfirmasi</h6>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col">
                            <div class="mb-2">
                                <input type="hidden" name="idUser" class="form-control"
                                    value="<?php echo $_SESSION['id_user']; ?>" readonly />
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bi bi-lock-fill"
                                    id="validationTooltipUsernamePrepend"></span>
                                <input type="password" minlength="8" class="form-control" name="password" id="password"
                                    required placeholder="password baru">
                                <!-- <i class="bi bi-eye show-hide" id="showPw"></i> -->
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bi bi-lock-fill"
                                    id="validationTooltipUsernamePrepend"></span>
                                <input type="password" minlength="8" class="form-control" name="passwordKonfirmasi"
                                    id="passwordKonfirmasi" required placeholder="password konfirmasi">
                                <!-- <i class="bi bi-eye show-hide" id="showPw"></i> -->
                            </div>
                            <div class="row mt-2">
                                <div class="col modal-footer">
                                    <a href="index"
                                        class="btn btn-sm btn-secondary bi bi-x-square shadow">&nbsp;Batal</a>
                                    <button type="submit" class="btn btn-sm btn-primary px-2 shadow">
                                        Ganti Password &nbsp;
                                        <i class="bi bi-check-square button__icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <div class="fixed-bottom">
        <?php
            include 'footer.php';
        ?>
    </div>
<div class="main-container container">
    <div class="row h-100">
        <div class="main-container container">
            <?= form_open_multipart('paymen/email'); ?>
            <div class="form-floating is-valid mb-3">
                <input type="hidden" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
                <input type="text" class="form-control" name="nisn" id="nisn" value="<?= $user['name']; ?>" required>
                <label for="nisn">NISN</label>
            </div>

            <br>
            <center>
                <button type="submit" class="btn btn-lg btn-default w-50 mb-4 shadow">
                    SIMPAN
                </button>
            </center>
            </form>

        </div>
        <div class="col-12 text-center mt-auto">
            <div class="row justify-content-center footer-info">
            </div>
        </div>
    </div>
</div>
</main>
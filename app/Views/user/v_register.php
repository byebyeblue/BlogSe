<?= $this->extend('/layouts/template-profile'); ?>
<?= $this->section('content-profile'); ?>


<h3 class="text-center">Sign up</h3>
</div>
</div>
<!-- action untuk mengarahkan ke method dan menghubungkan ke routes -->
<form action="/saveRegister" method="post">
    <div class="form-group form-primary">
        <input type="text" name="fullname" class="form-control" placeholder="Full name" id="fullname" />
        <span class="form-bar"></span>
    </div>
    <div class="form-group form-primary">
        <input type="text" name="email" class="form-control" placeholder="Email" id="email" />
        <span class="form-bar"></span>
    </div>
    <div class="form-group form-primary">
        <input type="password" name="password" placeholder="Password" class="form-control" />
        <span class="form-bar"></span>
    </div>
    <div class="row m-t-30 m-b-20">
        <div class="col-md-12 mt-2 mb-3">
            <input type="submit" class="btn text-center" value="Submit">
            <a href="/login"><button type="button" class="
                                        btn btn-primary btn-md btn-block
                                        waves-effect
                                        text-center
                                        m-b-20">
                    Sign up now
                </button>
            </a>
        </div>
    </div>
</form>
</div>
</div>
</form>
</div>
</div>

</div>

<?= $this->endSection(); ?>
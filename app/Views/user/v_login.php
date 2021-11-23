<?= $this->extend('/layouts/template-profile'); ?>
<?= $this->section('content-profile'); ?>

<h3 class="text-center">Sign In</h3>
</div>
</div>

<form action="/login" method="post">
    <div class="form-group form-primary">
        <input type="text" name="email" class="form-control" placeholder="Email" id="email">
        <span class="form-bar"></span>
    </div>
    <div class="form-group form-primary">
        <input type="password" name="password" class="form-control" placeholder="Password" class="form-control">
        <span class="form-bar"></span>
    </div>
    <div class="row m-t-30">
        <div class="col-md-12">
            <a href="/"><button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button> </a>
        </div>
    </div>
    <center>
        <div class="mt-2">
            <p> Don't have account?</p>
            <a href="/register"> Sign Up</a>
        </div>
    </center>
</form>
</div>
</form>
<!-- end of form -->
</div>
<!-- end of col-sm-12 -->
</div>
<!-- end of row -->
</div>
<!-- end of container-fluid -->


<?= $this->endSection(); ?>
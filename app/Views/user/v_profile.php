<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="frame">
  <div class="center">
    <div class="card">
      <div class="left">
        <div class="avatar">
          <div class="circle"></div>
          <div class="circle"></div>
          <img src="https://pbs.twimg.com/profile_images/894730722271010816/1g-2p3_m_400x400.jpg" />
        </div>
        <div class="info">
          <span class="big">salix dubois</span><span class="small">programmer</span>
        </div>
        <div class="buttons">
          <button class="flw">follow</button><button class="msg">message</button>
        </div>
      </div>
      <div class="right">
        <div class="stats posts">
          <span class="big">523</span><span class="small">posts</span>
        </div>
        <div class="stats likes">
          <span class="big">1387</span><span class="small">likes</span>
        </div>
        <div class="stats flwrs">
          <span class="big">146</span><span class="small">followers</span>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
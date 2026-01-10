<style>
  .breadcrumb-item+.breadcrumb-item:before {
    color: #ffffff;
  }
</style>
<nav class="bg-primary text-white" 
     aria-label="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb breadcrumb-scroll">

          <?php if(isset($breadcrumb_url_1)): ?>
            <li class="breadcrumb-item">
              <a class="text-white text-decoration-none" 
                 href="<?php echo $breadcrumb_url_1 ?? null; ?>">
                <?php echo $breadcrumb_title_1 ?? null; ?>
              </a>
            </li>
          <?php endif; ?>

          <?php if(isset($breadcrumb_url_2)): ?>
            <li class="breadcrumb-item">
              <a class="text-white text-decoration-none" 
                 href="<?php echo $breadcrumb_url_2 ?? null; ?>">
                <?php echo $breadcrumb_title_2 ?? null; ?>
              </a>
            </li>
          <?php endif; ?>

          <?php if(isset($breadcrumb_url_active)): ?>
            <li class="breadcrumb-item active">
              <a class="text-white text-decoration-none" 
                  href="<?php echo $breadcrumb_url_active ?? null; ?>" 
                  aria-current="page">
                <?php echo $breadcrumb_title_active ?? null; ?>
              </a>
            </li>
          <?php endif; ?>

        </ol>
      </div>
    </div>
  </div>
</nav>
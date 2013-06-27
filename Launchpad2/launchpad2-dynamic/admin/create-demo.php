<?php include('header.php'); ?>

  <div class="row">
    <div class="large-12 columns">

      <section class="create-new">

        <ul class="catalog edit" data-orbit data-options="timer_speed: 0;">

          <li data-orbit-slide="page-0" class="cover">
            <section class="content cover">
              <h2 class="catalog-title">Decoration</h2>
              <img src="img/catalog-sample/cover.jpg" alt="" class="cover-img">
            </section>
            <?php include('widgets/edit-control.php'); ?>
          </li>

          <li data-orbit-slide="page-1" class="product prod-columns-four">
            <section class="content product"> 
              <ul class="small-block-grid-1 large-block-grid-4 sortable">
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/01.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>OLSBO</h3>
                      <p class="desc">Photo frame, green</p>
                      <p class="price">P495</p>
                    </div>
                  </div>
                </li>
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/02.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>OLSBO</h3>
                      <p class="desc">Photo frame, red</p>
                      <p class="price">P495</p>
                    </div>
                  </div>
                </li>
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/03.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>SKURAR</h3>
                      <p class="desc">Candle holder, white</p>
                      <p class="price">P250</p>
                    </div>
                  </div>
                </li>
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/04.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>BONDIS</h3>
                      <p class="desc">Wall Clock</p>
                      <p class="price">P1,800</p>
                    </div>
                  </div>
                </li>
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/06.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>BRAVUR</h3>
                      <p class="desc">Wall clock</p>
                      <p class="price">P5,800</p>
                    </div>
                  </div>
                </li>
                <li class="th item">
                  <div class="item-set">
                    <div class="photo"><img src="img/catalog-sample/07.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>RUSCH</h3>
                      <p class="desc">Wall clock, white</p>
                      <p class="price">P130</p>
                    </div>
                  </div>
                </li>
                <?php include('widgets/edit-add-item-new.php'); ?>
                <?php include('widgets/edit-add-item.php'); ?>
              </ul>
            </section>
            <?php include('widgets/edit-control.php'); ?>
          </li>

          <li data-orbit-slide="page-2" class="product prod-columns-two">

            <section class="content product"> 
              <ul class="small-block-grid-1 large-block-grid-2 sortable">
                <li class="th item">
                    <div class="photo"><img src="img/catalog-sample/09.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>FINLIR</h3>
                      <p class="desc">Picture holder<br /><br />
                        15x10cm 
                      </p>
                      <p class="price">P895</p>
                    </div>
                </li>
                <li class="th item">
                    <div class="photo"><img src="img/catalog-sample/05.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>NYTTJA</h3>
                      <p class="desc">
                        Picture frame, assorted colours<br /><br />

                        Width: 14 cm<br />
                        Height: 19 cm<br />
                        Picture, width: 10 cm<br />
                        Picture, height: 15 cm<br />
                        Package quantity: 2 pieces
                      </p>
                      <p class="price">P180</p>
                    </div>
                </li>
                <?php include('widgets/edit-add-item.php'); ?>
              </ul>
            </section>

            <?php include('widgets/edit-control.php'); ?>
          </li>
          
          <li data-orbit-slide="page-3" class="product prod-columns-two">

            <section class="content product"> 
              <ul class="small-block-grid-1 large-block-grid-2 sortable">
                <li class="th item">
                    <div class="photo"><img src="img/catalog-sample/10.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>FINLIR</h3>
                      <p class="desc">Picture<br /><br />
                        38X48cm
                      </p>
                      <p class="price">P1,800</p>
                    </div>
                </li>
                <li class="th item">
                    <div class="photo"><img src="img/catalog-sample/11.jpg" alt=""></div>
                    <div class="product-info">
                      <h3>BILD</h3>
                      <p class="desc">Poster, eiffel tower <br /><br />40X50cm
                      </p>
                      <p class="price">P495</p>
                    </div>
                </li>
                <?php include('widgets/edit-add-item.php'); ?>
              </ul>
            </section>

            <?php include('widgets/edit-control.php'); ?>
          </li>
          
        </ul><!--main -->

      </section>
    </div>
  </div>

<?php include('footer.php'); ?>
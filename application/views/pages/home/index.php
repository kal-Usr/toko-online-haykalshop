<main role="main" class="container" style="background-color: #f9f9f9; padding-top: 20px; padding-bottom: 20px;">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-9">
            
            <!-- Tambahkan carousel di sini -->
            <!-- <div id="productCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/product/console.jpg" alt="Product 1" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product/console.jpg" alt="Product 1" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product/console.jpg" alt="Product 1" height="200">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body bg-dark text-light">
                            Kategori: <strong><?= isset($category) ? $category : 'Semua kategori' ?></strong>
                            <span class="float-right">
                                Urutkan Harga:
                                <a href="<?= base_url("/shop/sortby/asc") ?>" class="badge badge-success">Termurah</a> |
                                <a href="<?= base_url("/shop/sortby/desc") ?>" class="badge badge-success">Termahal</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($content as $row) : ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="<?= $row->image ? base_url("/assets/images/product/$row->image") : base_url("/assets/images/product/default.png") ?>" alt="" height="150" class="card-img-top" />
                            <div class="card-body">
                                <h6 class="card-title"><?= $row->product_title ?></h6>
                                <p class="card-text"><strong>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
                                <p class="card-text">
                                    <?= $row->description ?>
                                </p>
                                <a href="<?= base_url("/shop/category/$row->category_slug") ?>" class="badge badge-warning"><i class="fas fa-tags"></i><?= $row->category_title ?></a>
                            </div>
                            <div class="card-footer">
                                <form action="<?= base_url("/cart/add") ?>" method="POST">
                                    <input type="hidden" name="id_product" value="<?= $row->id ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty" value="1" class="form-control" />
                                        <div class="input-group-append">
                                            <button class="btn btn-dark">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <nav aria-label="Page navigation example">
                <?= $pagination ?>
            </nav>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header bg-dark text-light">Pencarian</div>
                        <div class="card-body">
                            <form action="<?= base_url("/shop/search") ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" name="keyword" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>" class="form-control" />
                                    <div class="input-group-append">
                                        <button class="btn btn-success text-light" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header bg-dark text-light">Kategori</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="<?= base_url('/') ?>" class="text-dark">Semua Kategori</a></li>
                            <?php foreach (getCategories() as $category) : ?>
                                <li class="list-group-item"><a href="<?= base_url("/shop/category/$category->slug") ?>" class="text-dark"><?= $category->title ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

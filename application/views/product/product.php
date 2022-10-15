<div class="span3">
    <div class="dabox">
        <h3 class="btn-primary"><i class="pull-right icon-search icon-white"></i> Search</h3>
        <form style="margin: 0;">
            <div class="control-group">
                <label class="control-label" for="categories">Category</label>
                <div class="controls row-fluid">
                    <select class="selectpicker span12">
                        <?php foreach ($category as $key => $data) { ?>
                            <option value="<?= $data->category_id ?>"><?= $data->category_name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="categories">Price Range</label>
                <div class="controls row-fluid">
                    <select class="selectpicker span12">
                        <option>
                            < 500.000</option>
                        <option selected>500.000 - 1.000.000</option>
                        <option>1.500.000 - 2.000.000</option>
                        <option>> 2.000.000</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="keyword">Keyword</label>
                <div class="controls row-fluid">
                    <input type="text" name="keyword" placeholder="type your keyword here" class="span12">
                </div>
            </div>
            <button class="btn btn-block btn-primary" type="button">Begin Search</button>
        </form>
    </div>
    <div class="dabox">
        <h3 class="btn-info"><i class="pull-right icon-tags icon-white"></i> Categories</h3>
        <ul>
            <?php foreach ($category as $key => $data) { ?>
                <li><a href="<?= base_url('home?category=' . $data->category_id) ?>"><?= $data->category_name ?> <span class="pull-right badge badge-info">8</span></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="dabox">
        <h3 class="btn-success"><i class="pull-right icon-tags icon-white"></i> Brands</h3>
        <ul>
            <?php foreach ($brands as $key => $data) { ?>
                <li><a href="<?= base_url('home?brand=' . $data->brand_id) ?>"><?= $data->brand_name ?> <span class="pull-right badge badge-success">8</span></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="span9">
    <div class="page-header">
        <h1>&raquo; Products List</h1>
    </div>
    <ul class="thumbnails">
        <?php foreach ($products as $key => $data) { ?>
            <li class="span3">
                <div class="thumbnail">
                    <h3 class="btn-success"><?= $data->product_name ?></h3>
                    <img src="<?= base_url('assets/main/img/product/' . $data->product_image) ?>" alt="" />
                    <div class="action btn-primary">
                        <div class="btn-group">
                            <a href="<?= base_url('home/detail/' . $data->product_slug) ?>" class="btn btn-warning" title="product detail"><i class="icon-search icon-white"></i></a>
                            <a href="#" class="btn btn-warning action-add-item" title="add to cart"><i class="icon-shopping-cart icon-white"></i></a>
                        </div>
                        &nbsp;Rp <?= $data->product_price ?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    <div class="pagination pagination-centered">
        <ul>
            <li><a href="#">‹‹ First</a></li>
            <li><a href="#">‹ Prev</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next ›</a></li>
            <li><a href="#">Last ››</a></li>
        </ul>
    </div>
</div>
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
        <h1>&raquo; <?= $product->product_name ?></h1>
    </div>
    <div class="row" style="margin-bottom:30px;">
        <div class="span5">
            <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="360" height="300" class="img-polaroid">
        </div>
        <div class="span4">
            <table class="table">
                <tr>
                    <td>Code</td>
                    <td><?= $product->product_code ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>Rp. <?= $product->product_price ?></td>
                </tr>
                <tr>
                    <td>Available</td>
                    <td><?= $product->product_stok > 0 ? 'Yes' : 'No' ?></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><a href="#"><?= $product->category_name ?></a></td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><a href="#"><?= $product->brand_name ?></a></td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>*****</td>
                </tr>
            </table>
            <div class="well input-prepend input-append">
                <span class="add-on">Qty</span>
                <input class="span1" type="text" value="1">
                <button class="btn btn-primary" type="button">Add to Cart</button>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="details-tab">
        <li class="active"><a href="#detail-description" data-toggle="tab">Descriptions</a></li>
        <li><a href="#detail-images" data-toggle="tab">Images <span class="badge">7</span></a></li>
        <li><a href="#detail-reviews" data-toggle="tab">Reviews <span class="badge">9</span></a></li>
        <li><a href="#detail-related" data-toggle="tab">Related Product <span class="badge">5</span></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="detail-description">
            <p><?= $product->product_desc ?></p>
        </div>
        <div class="tab-pane" id="detail-images">
            <ul class="thumbnails">
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="260" height="200">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="260" height="200">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="260" height="200">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="260" height="200">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="260" height="200">
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="detail-reviews">
            <div class="row-fluid">
                <form method="post" class="span12 well" action="#">
                    <div class="control-group">
                        <label class="control-label" for="message">Your Review</label>
                        <div class="controls">
                            <textarea class="span12" name="message" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn">Reset</button>
                </form>
            </div>
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="64" height="64">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">User Name</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="64" height="64">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">User Name</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">User Name</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="<?= base_url('assets/main/img/product/' . $product->product_image) ?>" width="64" height="64">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">User Name</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="detail-related">
            <ul class="thumbnails">
                <?php foreach ($relates as $data) { ?>
                    <li class="span3">
                        <div class="thumbnail">
                            <h3 class="btn-success"><?= $data->product_name ?></h3>
                            <img src="<?= base_url('assets/main/img/product/' . $data->product_image) ?>" width="260" height="180">
                            <div class="action btn-primary">
                                <div class="btn-group">
                                    <a href="./product_detail.html" class="btn btn-warning" title="product detail"><i class="icon-search icon-white"></i></a>
                                    <a href="#" class="btn btn-warning action-add-item" title="add to cart"><i class="icon-shopping-cart icon-white"></i></a>
                                </div>
                                &nbsp;Rp <?= $data->product_price ?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
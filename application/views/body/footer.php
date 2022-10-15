</div>

</div>
<!-- /.container -->
<div class="dafooter">
   <div class="container">
      <div class="row">
         <div class="span8">
            &copy; 2013 e-commerce starter template powered by <a href="http://twitter.github.com/bootstrap" target="_blank">twitter bootstrap</a> and <a href="http://bootswatch.com/cosmo" target="_blank" class="text-success">cosmo theme</a>
         </div>
         <div class="span4">
            <span class="pull-right">designed by <a target="_blank" href="http://github.com/davigmacode" class="text-warning">davigmacode</a></span>
         </div>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /.dafooter -->
<div id="cart-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">&raquo; Shoping Cart</h3>
   </div>
   <div class="modal-body">
      <style type="text/css">
         .table tr td {
            vertical-align: middle;
         }
      </style>
      <table class="table" style="margin-bottom:0" id="tablecart">
         <thead>
            <tr class="btn-primary">
               <th></th>
               <th>Product Name</th>
               <th>Qty</th>
               <th>Price</th>
               <th>Total</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($this->cart->contents() as $data) { ?>
               <tr>
                  <td>
                     <form action="<?= base_url('home/deletecartitem/') ?>" method="POST">
                        <input type="hidden" name="rowid" value="<?= $data['rowid'] ?>">
                        <button type="submit" class="close">×</button>
                     </form>
                  </td>
                  <td><?= $data['name'] ?></td>
                  <td><input type="text" style="margin:0;width:50px" value="<?= $data['qty'] ?>"></td>
                  <td>Rp. <?= $this->cart->format_number($data['price']) ?></td>
                  <td>Rp. <?= $this->cart->format_number($data['subtotal']) ?></td>
               </tr>
            <?php } ?>
            <tr class="success">
               <td colspan="4" align="right">Total</td>
               <td>Rp. <?= $this->cart->format_number($this->cart->total()) ?></td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="modal-footer">
      <button class="btn btn-warning">Update</button>
      <button class="btn btn-primary">Checkout</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
   </div>
</div>
<script type="text/javascript" src="<?= base_url() ?>assets/main/js/bootstrap.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugin/bootstrap-select/bootstrap-select.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugin/blockui/jquery.blockUI.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugin/alertify/alertify.min.js" charset="UTF-8"></script>

<script type="text/javascript">
   $(document).ready(function() {

      $('ul.nav li.dropdown').hover(
         function() {
            $(this).closest('.dropdown-menu').stop(true, true).show();
            $(this).addClass('open');
         },
         function() {
            $(this).closest('.dropdown-menu').stop(true, true).hide();
            $(this).removeClass('open');
         }
      );

      $('.carousel').carousel();

      $('.selectpicker').selectpicker();

      $("#action-show-cart").bind("click", function(e) {
         e.preventDefault();
         $.blockUI({
            showOverlay: false,
            message: "<img src='<?= base_url() ?>assets/main/img/loading.gif' />",
            css: {
               top: ($(window).height() - 30) / 2 + 'px',
               left: ($(window).width() - 80) / 2 + 'px',
               width: '80px',
               border: 'none',
               padding: '13px',
               '-webkit-border-radius': '10px',
               '-moz-border-radius': '10px',
               opacity: .7,
               color: '#fff'
            }
         });
         setTimeout(function() {
            $('#cart-modal').modal('show')
         }, 1000);
         $.unblockUI();
         return false;
      });

      // $(".action-add-item").bind("click", function(e) {
      //    e.preventDefault();
      //    let obj = this;
      //    alertify.prompt("Quantity", function(e, str) {
      //       // str is the input text
      //       // console.log($(obj).data('id'))
      //       let id = $(obj).data('id');
      //       let price = $(obj).data('price');
      //       let name = $(obj).data('name');
      //       if (e) {
      //          $.post("<?= base_url('home/addtocart/') ?>", {
      //             id: id,
      //             qty: str,
      //             price: price,
      //             name: name
      //          }, function(data, status) {
      //             console.log(status);
      //             let text = `<tr>
      //                            <td><button type="button" class="close">×</button></td>
      //                            <td>${name}</td>
      //                            <td><input type="text" style="margin:0;width:50px" value="${str}"></td>
      //                            <td>Rp. ${price}</td>
      //                            <td>Rp.12.321.312</td>
      //                         </tr>`;
      //             $('#tablecart > tbody:last').append(text);
      //          })
      //          var count = parseInt($('#item-count').text()) + parseInt(str);
      //          $('#item-count').text(count)
      //          alertify.success("New item added to cart");
      //       } else {
      //          alertify.error("Okay");
      //       }
      //    }, "1");
      //    return false;
      // });

   });
</script>

<?php if ($this->session->has_userdata('success')) { ?>
   <script>
      alertify.success("<?= $this->session->flashdata('success'); ?>");
   </script>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
   <script>
      alertify.error("<?= $this->session->flashdata('error'); ?>");
   </script>
<?php } ?>
</body>

</html>
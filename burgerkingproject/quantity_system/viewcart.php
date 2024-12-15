<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

<div class="container-fluid my-5">
<h3 class="text-center">Cart View</h3>
    <div class="row">
       
        <div class="col">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Total</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    include "db.php";
    
    $a="SELECT * from cart";
    $b= mysqli_query($conn,$a);
    $total=0;
    $c= mysqli_num_rows($b);
    if($c>0){
        while($r=mysqli_fetch_array($b)){
    
    ?>
    <tr>
      <th scope="row"><?php echo $r['sno'];?></th>
      <input type="hidden" class="pid" value="<?php echo $r['sno'];?>">
      <td><img src="<?php echo 'assets/img/products/' .$r['p_image'];?>" alt="" class="img-fluid" height="100" width="100"></td>
      <td><?php echo $r['p_name'];?></td>
      <td><?php echo $r['p_price'];?></td>
      <input type="hidden" class="pprice" value="<?php echo $r['p_price'];?>">
      <td><input type="number" id="" value="<?php echo $r['p_qty'];?>" class="w-25 text-center itemQty"></td>
      <td><?php echo $r['p_total'];?></td>
      <?php $total+=$r['p_total'];?>
    </tr>
    <?php }
    } ?>
  </tbody>
</table>
<h3 class="float-end">Grand Total: <?php echo $total;?> </h3>
        </div>
    </div>
</div>
<script src="./assets/js/jquery-1.11.3.min.js"></script>
<script>
  $(document).ready(function(){
     $('.itemQty').on('change',function(){
            var $el = $(this).closest('tr');
            var pid= $el.find('.pid').val();
            var pprice= $el.find('.pprice').val();
            var qty= $el.find('.itemQty').val();
            //alert(pid+" "+ pprice +" "+qty);

            $.ajax({
                url:'quantity.php',
                type:'post',
                data:{
                    qy:qty,
                    get_id:pid,
                    p_price:pprice
                },
                success: function(data){
                    if(data==1){
                        //alert(data);
                        location.reload();
                    }
                }
            });
     });

  });


</script>
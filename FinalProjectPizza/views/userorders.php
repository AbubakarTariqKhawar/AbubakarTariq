
<div class="container-lg" style="padding-top: 30px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Your Orders</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
            
            

                  <div class="row">
                    <div class=" col-12 mt-3 ">
                    <table>
                      <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>User Name</th>
                        <th>When Order Creater</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Paid</th>
                      </tr>
                      <tr>
                        <?php
                        $id_User = $_SESSION['user_id'];
                        $admin = $_SESSION['user_admin'];

                        $allOrders = '';

                        if($admin == 1){
                          $allOrders = QUERY::getAllOrder();
                        }else{
                          $allOrders = QUERY::getAllOrderbyUserId($id_User);
                        }

                        ?>
                        <?=$list = $allOrders;?>
                      </tr>
                    </table>
                    </div>
                  </div>

      </section>

    </div> 
    
  </div>

 

</div>
    

            


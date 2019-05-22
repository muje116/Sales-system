<div id="edit-modal" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4>Edit post</h4>
                    <div class="modal-body">
                      <form action="{{ route('suppliers.update', ['id'=>$suppliers->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                      <div class="form-group">
                        <label for="supplier_namecontact">Supplier Name</label>
                        <input type="text" class="form-control" name="supplier_name" value="{{ $suppliers->supplier_name }}">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <textarea name="address" rows="8" cols="20" class="form-control" id="address" value="{{ $suppliers->address }}"></textarea>
                        </div>


                        <div class="form-group">
                          <label for="email">Email</label>
                          <input name="email" type="email"class="form-control" id="email" value="{{ $suppliers->email }}">
                        </div>
                        <div class="form-group">
                          <label for="contact">Contact</label>
                          <input type="number" class="form-control" name="contact" value="{{ $suppliers->contact }}">
                        </div>


                            <div class="form-group modal-footer">
                              <button type="submit" class="btn btn-default" data-dismiss='modal'>Close</button>
                              <button type="submit" class="btn btn-success" id='modal-save'>Update Supplier</button>                            </div>
                      </form>
                        <div class="">

                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                            <a href="{{ route('suppliers') }}">Suppliers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?/* <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>
*/?>
            <form action="{{ route('cart.checkout') }}" method="POST">
                {{ csrf_field() }}
                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        src="{{ asset('app/js/checkout.js') }}"
                        data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
                        data-amount="999"
                        data-name="sales"
                        data-description="Widget"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-zip-code="true">
                </script>
            </form>

<?php /*
                                    $branch=$_SESSION['branch'];
                                    $query=mysqli_query($con,"select * from customer natural join sales natural join sales_details natural join term natural join product where balance<>0 and branch_id='$branch' and status<>'paid' order by cust_last desc")or die(mysqli_error());
                                    while($row=mysqli_fetch_array($query)){
*/
?>
<?php /*
                                                    $querytotal=mysqli_query($con,"select SUM(balance) as total from customer where branch_id='$branch'")or die(mysqli_error());
                                                    $row=mysqli_fetch_array($querytotal);
                                                    echo number_format($row['total'],2);
                                                    */?>

<?php /*?>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $pdt->id?>edit" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Room</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="action.php" method="post">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" name="username" id="exampleInputEmail1" value="<?php echo $room->username?>">
                                        </fieldset>
                                        <input type="hidden" name="id" value="<?php echo $pdt->id?>">
                                        <input type="hidden" name="option" value="edit">
                                        <fieldset class="form-group">
                                            <label for="exampleInputEmail1">default Password</label>
                                            <input type="text" class="form-control" name="password" id="exampleInputEmail1" value="1234">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="exampleSelect1">Role</label>
                                            <select class="form-control" name="role" id="exampleSelect1">
                                                <option value="ordinary">ordinary</option>
                                                <option value="admin">admin</option>
                                            </select>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary btn-block">update</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $pdt->id?>delete" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Are you sure you want to delete <?php echo $pdt->username?></h4>
                                </div>
                                <div class="modal-body">
                                    <a href="delete.php?id=<?php echo $pdt->id?>" class="w3-btn w3-red">yes</a>
                                    <a data-dismiss="modal" class="w3-btn w3-green">No</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><?php */?>



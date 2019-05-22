
<div id="update{{ $cus->id }}" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
        <header class="w3-container w3-teal">
            <button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>

            <h2>Update Customer</h2>
        </header>
        <div class="w3-container">
            <form action="{{ route('admin_update',['id' => $cus->id]) }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                {{ csrf_field() }}
                <div class="w3-row-padding">
                    <div class="w3-row-padding">
                        <div class="form-group w3-half">
                            <label for="prod_code">Customer Name</label>
                            <input type="text" class="w3-input w3-border" name="customer_name" id="" placeholder="customer name" value="{{ $cus->customer_name }}">
                        </div>
                        <div class="form-group w3-half">
                            <label for="name">Company</label>
                            <input type="text" name=" company" class="w3-input w3-border" id="" placeholder="company" value="{{ $cus->company }}">
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <div class="form-group w3-half">
                            <label for="email">contact</label>
                            <input name="contact" type="number" class="w3-input w3-border" id="price" placeholder="contact" value="{{ $cus->contact }}">
                        </div>

                        <div class="form-group w3-half">
                            <label for="quantity">Email</label>
                            <input type="text" name="email" class="w3-input w3-border" id="" value="{{ $cus->email }}" placeholder="email">
                        </div>
                    </div>
                    <div class="w3-row-padding">

                        <fieldset   class="form-group w3-half">
                            <label for="tax">Address</label>
                            <textarea cols="5" rows="5" name="address" class="w3-input w3-border" id="" placeholder="address/location" >{{ $cus->address }}</textarea>
                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
        <footer class="w3-container w3-teal">
            <p>customer</p>
        </footer>
    </div>
</div>

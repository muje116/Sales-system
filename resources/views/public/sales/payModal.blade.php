
<style>
    .city {display:none}
</style>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom">
        <header class="w3-container w3-blue">
   <span onclick="document.getElementById('id01').style.display='none'"
         class="w3-closebtn w3-padding-top">&times;</span>
            <h2>Payment</h2>
        </header>

        <ul class="w3-pagination w3-white w3-border-bottom" style="width:100%;">
            <li><a href="#" class="tablink" onclick="openCity(event, 'LPO')">LPO</a></li>
            <li><a href="#" class="tablink" onclick="openCity(event, 'Credit')">Credit</a></li>
            <li><a href="#" class="tablink" onclick="openCity(event, 'Cash')">Cash</a></li>
            <li><a href="#" class="tablink" onclick="openCity(event, 'Cheque')">Cheque</a></li>
        </ul>

        <div id="LPO" class="w3-container city">
            <h1>LPO</h1>
            <form action="#" method="post" class="w3-container">

                <table class="w3-striped w3-card-4">
                    <thead class="cart-product-wrap-title-main">
                    <tr>

                    </tr>
                    </thead>
                    <tbody>

                    <tr class="cart_item">

                    <tr>
                        <td colspan="5" class="actions">

                            <div class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Organisation Name</label>
                                    <input type="text" name=" org_name" class="w3-input w3-border" id="" value="{{ old('org_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">LPO Number</label>
                                    <input type="text" name="lpo_number" class="w3-input w3-border" id="" value="{{ old('lpo_number') }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Customer Name</label>
                                    <input type="text" name="cust_name" class="w3-input w3-border" id="" value="{{ old('cust-name') }}">
                                </div>

                                <div class="">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" name="contact" class="w3-input w3-border" id="" value="{{ old('contact') }}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" rows="5" cols="6" class="w3-input w3-border" id="address">{{ old('address') }}</textarea>
                                </div>


                            </div>

                        </td>
                    </tr>

                    </tbody>
                </table>


            </form>

            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-btn w3-white w3-border"
                        onclick="document.getElementById('id01').style.display='none'">Close</button>
                <button class="w3-btn w3-right w3-green w3-border"> Enter</button>
            </div></div>

        <div id="Credit" class="w3-container city">
            <h1>Credit</h1>
            <form action="#" method="post" class="w3-container">

                <table class="w3-striped w3-card-4">
                    <thead class="cart-product-wrap-title-main">
                    <tr>

                    </tr>
                    </thead>
                    <tbody>

                    <tr class="cart_item">

                    <tr>
                        <td colspan="5" class="actions">

                            <div class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Customer Name</label>
                                    <input type="text" name=" customer_name" class="w3-input w3-border" id="" value="{{ old('customer_name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" class="w3-input w3-border" id="email" value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" name="contact" class="w3-input w3-border" id="" value="{{ old('contact') }}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" rows="5" cols="6" class="w3-border w3-input" id="address">{{ old('address') }}</textarea>
                                </div>

                            </div>

                        </td>
                    </tr>

                    </tbody>
                </table>


            </form>

            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-btn  w3-white w3-border"
                        onclick="document.getElementById('id01').style.display='none'">Close</button>
                <button class="w3-btn w3-right w3-green w3-border">Enter</button>
            </div>
        </div>

        <div id="Cash" class="w3-container city">
            <h1>Cash</h1>
            <form action="{{ route('cash.store') }}" method="post" class="w3-container">

                <table class="w3-striped w3-card-4">
                    <thead class="cart-product-wrap-title-main">
                    <tr>

                    </tr>
                    </thead>
                    <tbody>

                    <tr class="cart_item">

                    <tr>
                        <td colspan="5" class="actions">

                            <div class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Customer Name</label>
                                    <input type="text" name=" customer_name" class="w3-input w3-border" id="" value="{{ old('customer_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Amount Paid</label>
                                    <input type="number" name="amount" class="w3-border w3-input" id="" value="{{ old('amount') }}">
                                </div>

                            </div>

                        </td>
                    </tr>

                    </tbody>
                </table>
                <div class="w3-container w3-light-grey w3-padding">
                    <button class="w3-btn w3-white w3-border"
                            onclick="document.getElementById('id01').style.display='none'">Close</button>
                    <a class="w3-btn w3-right w3-green w3-border" type="submit">Enter</a>
                </div>

            </form>


        </div>


        <div id="Cheque" class="w3-container city">
            <h1>Cheque</h1>
            <form action="#" method="post" class="w3-container">

                <table class="w3-striped w3-card-4">
                    <thead class="cart-product-wrap-title-main">
                    <tr>

                    </tr>
                    </thead>
                    <tbody>

                    <tr class="cart_item">

                    <tr>
                        <td colspan="5" class="actions">

                            <div class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Customer Name</label>
                                    <input type="text" name=" customer_name" class="w3-input w3-border " id="" value="{{ old('customer_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Cheque Number</label>
                                    <input type="text" name="cheque_number" class="w3-input w3-border " id="" value="{{ old('cheque_number') }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Bank Held</label>
                                    <input type="number" name="bank" class="w3-input w3-border w3-input" id="" value="{{ old('bank') }}">
                                </div>

                            </div>

                        </td>
                    </tr>

                    </tbody>
                </table>

                <div class="w3-container w3-light-grey w3-padding">
                    <button class="w3-btn  w3-white w3-border"
                            onclick="document.getElementById('id01').style.display='none'">Close</button>
                    <button class="w3-btn w3-right w3-border w3-green"><a href="{{ route('sales.lpo') }}">Enter</a></button>
                </div>
            </form>

        </div>


    </div>
</div>

<script>
    document.getElementsByClassName("tablink")[0].click();

    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].classList.remove("w3-light-grey");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("w3-light-grey");
    }
</script>



<div class="form-group w3-half">
    <label for="prod_code">Customer Name</label>
    <input type="text" class="w3-input w3-border" name="customer_name" id="" value="{{ old('customer_name') }}">
</div>
<div class="form-group w3-half">
    <label for="name">Company</label>
    <input type="text" name=" company" class="w3-input w3-border" id="" value="{{ old('company') }}">
</div>
</div>
<div class="w3-row-padding">
    <div class="form-group w3-half">
        <label for="email">contact</label>
        <input name="contact" type="number" class="w3-input w3-border" id="price" value="{{ old('contact') }}">
    </div>

    <div class="form-group w3-half">
        <label for="quantity">Email</label>
        <input type="text" name="email" class="w3-input w3-border" id="" value="{{ old('email') }}">
    </div>
</div>
<div class="w3-row-padding">

    <fieldset   class="form-group w3-half">
        <label for="tax">Address</label>
        <textarea cols="5" rows="5" name="address" class="w3-input w3-border" id="" >{{ old('address') }}</textarea>
    </fieldset>
</div>
<div id ="add" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Add Shop Details</h4>
      </div>
      <div class="modal-body">
                      <form class="form-horizontal form-label-left" action = "{{ route('shop.store') }}" method = "post" >
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Shop Name</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name ="name"  value="{{ old('name') }}">
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true" ></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Shop Number</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" name = "comp_number" class="form-control" value="{{ old('comp_name') }}">
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true" ></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Contact</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" name = "contact" class="form-control" value="{{ old('contact') }}">
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true" ></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3" >Address</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea name="address" rows="5" cols="5" class="form-group">{{ old('address') }}</textarea>
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
  					  <input type = "hidden" name = "status" value = "active">
                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">

                            <button name = "submit" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
  </div>
</div>


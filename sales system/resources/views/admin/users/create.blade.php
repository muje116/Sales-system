    <div class="x_panel">
                    <div class="x_title">
                      <h2>Add New User <i class = "fa fa-users"></i></h2>
                      <ul class="nav navbar-right panel_toolbox">
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form class="form-horizontal form-label-left" action = "{{ route('users.store') }}" method = "post" >
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name ="email"  value="{{ old('email') }}">
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true" ></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="password" name = "password" class="form-control">
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true" ></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3" value="{{ old('name') }}">Full name</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="name">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                        </div>
  					  <input type = "hidden" name = "status" value = "active">
                        <div class="form-group">
                          <label class="col-md-3 col-sm-3 col-xs-3">Role</label>
                          <div class="col-md-9 col-sm-9 col-xs-9 form-group">
                          <select name="role" class="col-md-3 col-sm-3 col-xs-3 form-control">
                            <option>admin</option>
                            <option>ordinary</option>
                          </select>
                            <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                          </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                          <div class="col-md-9 col-md-offset-3">

                            <button name = "submit" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Store User</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>

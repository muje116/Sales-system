@if (count($errors) > 0)
  <ul class="list-group">
    @foreach ($errors->all() as $error)

      <ul class="list-group">
        <li class="list-group-item text-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            {{ $error }}
        </li>
      @endforeach
  </ul>
@endif
<script>
          @if (Session::has('success'))
              toastr.success("{{ Session::get('success') }}")
          @endif

          @if (Session::has('info'))
              toastr.info("{{ Session::get('info') }}")
@endif
</script>

          <div class="container">
              @if ($errors ->count() >0)
                  <ul class="list-group">
                      @foreach ($errors as $error)
                          <li class="list-group-item-danger">
                              {{ $error }}
                          </li>
                      @endforeach
                  </ul>
              @endif

              @if (Session::has('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>

              @endif
          </div>
  </ul>
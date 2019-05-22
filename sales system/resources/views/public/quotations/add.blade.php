<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
        <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2>Add Customer</h2>
        </header>
        <div class="w3-container">
                            <form action="{{ route('quick') }}" method="post" enctype="multipart/form-data" class="w3-card-8">
                {{ csrf_field() }}
                <div class="w3-row-padding">
                   @include('public.partials.customer')
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>

        </div>
        <footer class="w3-container w3-teal">
            <p>customer</p>
        </footer>
    </div>
</div>

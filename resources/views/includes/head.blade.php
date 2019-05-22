
<body>

<ul class="w3-navbar w3-black">
    <li><a href="#">Home</a></li>

    <li><a href="javascript:void(0)" onclick="w3_open()">Menu</a></li>
</ul>

<nav class="w3-dropnav w3-card-2" style="display:none" id="myDropnav">
    <div class="w3-container">
        <span onclick="w3_close()" class="w3-closebtn w3-xlarge" title="Close Menu">&times;</span>
    </div>
    <div class="w3-row-padding w3-padding-bottom">
        <div class="w3-third">
            <h3>Sales</h3>
            <a href="#">Make A Sales</a>
            <a href="#">View sales</a>

        </div>
        <div class="w3-third">
            <h3>Quotations</h3>
            <a href="#">Make Quotations</a>
            <a href="#">View Quotations</a>

        </div>
        <div class="w3-third">
            <h3>Collections</h3>
            <a href="#">View</a>

        </div>
    </div>
    <br>
</nav>

<script>
    function w3_open() {
        document.getElementById("myDropnav").style.display = "block";
    }
    function w3_close() {
        document.getElementById("myDropnav").style.display = "none";
    }
</script>

</body>
<?php include '../includes/header.php'; ?>

<script>
    function showSuggestions(str) {
        console.log(str); 
    }
</script>

<div class="container">
    <h3>Search using AJAX</h3>

    <form>
        <input type="text" class="form-control" placeholder="Enter Name" onkeyup="showSuggestions(this.value)">
    </form>
    <p class="lead"><span id="output" style="font-weight:bold;"></span></p>
</div>


<?php include '../includes/footer.php'; ?>  

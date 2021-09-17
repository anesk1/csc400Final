
<nav id="nav-bar">
    <p id="nav-title">Spanish Verb Helper</p>
    <form method="post" action="" id="test-form">
        <button class="myButton2" id="take-test-btn" name="take-test-btn">Take Test</button>
    </form>
</nav>

<?php 
    if (isset($_POST['take-test-btn'])) {

        header("Location: test.php");
    }

?>


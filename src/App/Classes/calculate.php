
<p>Result is:</p>

<?php
switch ($_POST['operand']) {
    case 'add' :
        echo $_POST['first'] + $_POST['second'];
        break;
    case 'extract':
        echo $_POST['first'] - $_POST['second'];
        break;
    case 'multiply' :
        echo $_POST['first'] * $_POST['second'];
        break;
    case 'division':
        echo $_POST['first'] / $_POST['second'];
        break;
    default:
        echo 'Something went wrong';
}
?>


<button id="myBtn">Go back</button>


<script type="text/javascript" src="/index.js"></script>
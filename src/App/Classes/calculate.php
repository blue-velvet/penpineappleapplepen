
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

<div>
    <button id="myBtn">Go back</button>
</div>


<script type="text/javascript" src="/penpineappleapplepen/src/index.js"></script>
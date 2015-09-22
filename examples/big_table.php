<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>rowsorter.js</title>
    <script type="text/javascript" src="../dist/RowSorter.js"></script>
</head>
<body>

<style>
table {width: 80%; font-size: 14px; font-family: tahoma, arial, sans-serif;}
table thead th {background-color: #ccc; padding: 5px 8px;}
table td {background-color: #ddd; padding: 5px 8px;}

table.sorting-table {cursor: move;}
table tr.sorting-row td {background-color: #8b8;}
table td.div {padding: 0;}
table td.div > div {background-color: #b88;line-height:2;}
</style>

<table id="table1">
    <thead>
        <tr>
            <th colspan="4">Basic Sorting</th>
        </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 0; $i < 1000; $i++):
    ?>
        <tr>
            <td>Row <?=$i?></td>
            <td>Sample Content <?=$i?></td>
            <td class="div"><div><div><span>Inner Elements <?=$i?></span></div></div></td>
            <td>Sample Content Sample Content Sample Content Sample Content Sample Content Sample Content Sample Content Sample Content</td>
        </tr>
    <?php endfor; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" id="logarea">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4"><button type="button" onclick="killRowSorter();">Kill RowSorter</button></td>
        </tr>
    </tfoot>
</table>

<script type="text/javascript">
var logarea = document.getElementById("logarea");
function log(text)
{
    logarea.innerHTML = text;
}

var table = document.getElementById("table1");
RowSorter(table, {
    stickFirstRow : false,
    stickLastRow  : false
});

function killRowSorter()
{
    RowSorter(table, false);
}
</script>

</body>
</html>

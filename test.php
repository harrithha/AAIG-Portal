<?php 
echo "<table id='tbl_exporttable_to_xls' border='1'>
<thead>
    <th>Sr</th>
    <th>Name</th>
    <th>Location</th>
    <th>Job Profile</th>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>
            <p>Amit Sarna</p>
        </td>
        <td>Florida</td>
        <td>Data Scientist</td>
    </tr>
    <tr>
        <td>2</td>
        <td>
            <p>Sagar Gada</p>
        </td>
        <td>California</td>
        <td>Sr FullStack Dev</td>
    </tr>
    <tr>
        <td>3</td>
        <td>
            <p>Ricky Marck</p>
        </td>
        <td>Nevada</td>
        <td>Sr .Net Dev</td>
    </tr>
    <tr>
        <td>4</td>
        <td>
            <p>Andrea Ely</p>
        </td>
        <td>New York</td>
        <td>Sr Delivery Mgr</td>
    </tr>

    <tr>
        <td>5</td>
        <td>
            <p>Sunita Devgan</p>
        </td>
        <td>Colorado</td>
        <td>UiUx Expert</td>
    </tr>
</tbody>
</table>";
?>
<html>
<head>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <button type="submit" onclick="ExportToExcel('xlsx')">Export table to excel</button>

    <script>

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
        }

    </script>
</body>
</html>
                    
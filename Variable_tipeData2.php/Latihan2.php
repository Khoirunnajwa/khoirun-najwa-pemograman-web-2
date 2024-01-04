<!DOCTYPE html>
<html>
<head>
    <title>Tabel 15x5</title>
</head>
<body>
    <table border="1" id="myTable">
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];

        for (var i = 0; i < 15; i++) {
            var row = table.insertRow(i);
            for (var j = 0; j < 5; j++) {
                var cell = row.insertCell(j);
                cell.innerHTML = "Baris " + (i + 1) + " Kolom " + (j + 1);
            }
        }
        
    </script>
</body>
</html>
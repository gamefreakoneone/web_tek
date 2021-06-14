<html>

<head>
    <title>Engineering Student Information</title>
    <style>
        body {
            font-family: Verdana;
            color: maroon;
            background-color: aliceblue;
        }

        input {
            font-family: Verdana;
            width: "1in";
        }

        td {
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Engineering Student Information</h2>

    <pre style="font-weight:bold;font-size:120%">
<?php print_r($_POST); ?>
</pre>

    <table cellpadding="5">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td> <?php echo $_GET["name"]; ?></td>
        </tr>
        <tr>
            <td>Zipcode</td>
            <td> <?php echo $_GET["s_code"]; ?></td>
        </tr>

        <tr>
            <td>Student: </td>
            <td><?php if (isset($_GET["student"])) {
                    echo "true";
                } else {
                    echo "false";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Rank</td>
            <td> <?php echo $_GET["rank"]; ?></td>
        </tr>
    </table>

    <p>Interested Universities: <?php echo $_GET["comments"] ?></p>


</body>

</html>
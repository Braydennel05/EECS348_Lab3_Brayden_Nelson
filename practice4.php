<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multiplication Table</title>
    <style>
        :root {
            --bg: #12151c;
            --panel: #191d26;
            --panel-border: #2a2f3d;
            --text: #e7e9ee;
            --text-dim: #9099ab;
            --amber: #e8a33d;
            --teal: #4fd1c5;
            --mono: Consolas, "Cascadia Mono", "Courier New", monospace;
        }

        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            min-height: 100vh;
            font-family: var(--mono);
            color: var(--text);
            background: var(--bg);
        }

        .wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .terminal {
            width: fit-content;
            max-width: 95vw;
            min-width: 300px;
            background: rgba(25, 29, 38, 0.92);
            border: 1px solid var(--panel-border);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 30px 60px -20px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(6px);
        }

        .titlebar {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            background: #1e232f;
            border-bottom: 1px solid var(--panel-border);
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dot:nth-child(1) { background: #e8746a; }
        .dot:nth-child(2) { background: #e8c34d; }
        .dot:nth-child(3) { background: #57c785; }

        .titlebar span {
            margin-left: 8px;
            font-family: var(--mono);
            font-size: 12px;
            color: var(--text-dim);
        }

        .body {
            padding: 28px 26px 30px;
        }

        .prompt {
            font-family: var(--mono);
            font-size: 13px;
            color: var(--teal);
            margin: 0 0 6px;
        }

        h1 {
            font-size: 22px;
            font-weight: 600;
            letter-spacing: -0.01em;
            margin: 0 0 20px;
        }

        form {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        label {
            font-size: 12.5px;
            color: var(--text-dim);
        }

        input[type="text"] {
            font-family: var(--mono);
            font-size: 14px;
            color: var(--text);
            background: #1c212c;
            border: 1px solid var(--panel-border);
            border-radius: 7px;
            padding: 9px 12px;
            width: 100px;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: var(--teal);
        }

        input[type="submit"] {
            font-family: var(--mono);
            font-size: 13.5px;
            color: var(--text);
            background: #1c212c;
            border: 1px solid var(--panel-border);
            border-radius: 7px;
            padding: 10px 14px;
            cursor: pointer;
            transition: border-color 0.15s ease, background 0.15s ease;
        }

        input[type="submit"]:hover {
            border-color: var(--amber);
            background: #22293a;
        }

        p {
            color: var(--text-dim);
            font-size: 14.5px;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 13px;
        }

        table, th, td {
            border: 1px solid var(--panel-border);
            padding: 6px 10px;
            text-align: center;
        }

        th {
            color: var(--amber);
            background: #1c212c;
            font-weight: 600;
        }

        td {
            color: var(--text-dim);
            background: #171b24;
        }

        a {
            color: var(--teal);
            text-decoration: none;
            border-bottom: 1px solid rgba(79, 209, 197, 0.35);
        }

        a:hover {
            border-bottom-color: var(--teal);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            padding: 10px 14px;
            background: #1c212c;
            border: 1px solid var(--panel-border);
            border-radius: 7px;
            font-size: 13px;
            color: var(--text);
            text-decoration: none;
        }

        .back-link:hover {
            border-color: var(--amber);
            background: #22293a;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <main class="terminal">
            <div class="titlebar">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span>lab-three — practice4.php</span>
            </div>

            <div class="body">
                <p class="prompt">$ php multiplication-table.php</p>
                <h1>PHP Multiplication Table</h1>

                <form method="GET" action="practice4.php">
                    <label for="num">Enter a number:</label>
                    <input type="text" name="num" id="num">
                    <input type="submit" value="Generate">
                </form>

                <?php
                if (isset($_GET['num']) && $_GET['num'] !== "") {
                    $n = intval($_GET['num']);

                    if ($n > 0) {
                        echo "<table>";
                        // header row
                        echo "<tr><th>x</th>";
                        for ($col = 1; $col <= $n; $col++) {
                            echo "<th>$col</th>";
                        }
                        echo "</tr>";

                        for ($row = 1; $row <= $n; $row++) {
                            echo "<tr><th>$row</th>";
                            for ($col = 1; $col <= $n; $col++) {
                                $product = $row * $col;
                                echo "<td>$product</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "<p>Please enter a positive number.</p>";
                    }
                }
                ?>

                <a class="back-link" href="index.html">&larr; Back to home</a>
            </div>
        </main>
    </div>
</body>

</html>

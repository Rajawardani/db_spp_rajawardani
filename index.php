<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>

    <style>
        body {
            background-image: url("src/background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

            margin: 0;
            font-family: 'Open Sans', sans-serif;
            min-height: 100vh;
        }

        fieldset {
            margin: 100px auto;
            width: 320px;
            height: 400px;
            border: 2px solid white;
            background-color: white;
            border-radius: 10px;
        }

        label {
            font-family: Tahoma;
            color: red;
        }

        input {
            margin: 5px;
            padding: 10px;
            width: 300px;
            height: 40px;
            box-sizing: border-box;
            border: 1px solid white;
            border-radius: 10px;
        }

        #submit {
            color: white;
            background-color: #428df5;
            cursor: pointer;
        }

        #input {
            background-color: #1e4170;
            color: white;
        }

        .alert {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h1 align="center">
        <b>SPP</b> ONLINE
    </h1>

    <form action="login_validasi.php" method="post">

        <fieldset>

            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                }
            }
            ?>

            <legend align="center">
                <img src="src/ikon.jpg" width="96" height="76">
            </legend>

            <p align="center">
                <b>LOGIN</b>
            </p>

            <table>
                <tr>
                    <td>
                        <input name="username"
                               type="text"
                               placeholder="Username"
                               id="input">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input name="password"
                               type="password"
                               placeholder="Password"
                               id="input">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input name="login"
                               type="submit"
                               value="LOGIN"
                               id="submit">
                               <tr><td> </tr></td>
                               <tr><td> </tr></td>
                               <tr> <td align="center"> <a href = "bayar.php"> CEK PEMBAYARAN </a> </tr></td>
                    </td>
                </tr>
            </table>

        </fieldset>

    </form>

</body>

</html>
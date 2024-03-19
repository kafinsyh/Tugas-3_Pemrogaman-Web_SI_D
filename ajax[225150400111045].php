<?php
if (isset($_POST["nim"])) { ?>
    <table border="">
        <tr>
            <th>
                Nama
            </th>
            <th>
                NIM
            </th>
            <th>
                E-mail
            </th>
            <th>
                Gender
            </th>
            <th>
                Golongan Darah
            </th>
        </tr>
        <tr>
            <td>
                <?php
                $nama = $_POST["nama"] = " " ? "Nama Kosong" : $_POST["nama"];
                echo $nama;
                ?>
            </td>
            <td>
                <?php
                $nim = $_POST["nim"] = " " ? "NIM Kosong" : $_POST["nim"];
                echo $nim;
                ?>
            </td>
            <td>
                <?php
                $email = $_POST["email"] = " " ? "Email Kosong" : $_POST["email"];
                echo $email;
                ?>
            </td>
            <td>
                <?php
                $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Gender Kosong";
                echo $gender
                ?>
            </td>
            <td>
                <?php
                echo $_POST["golonganDarah"];
                ?>
            </td>
        </tr>
    </table>
<?php
}
?>
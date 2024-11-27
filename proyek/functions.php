<?php
    $conn = mysqli_connect ('localhost','root','','db_atlet_satrio');

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        $IDATLET = htmlspecialchars($data["idatlet"]);
        $NAMAATLET = htmlspecialchars($data["namaatlet"]);
        $TGLLAHIR = htmlspecialchars($data["tgllahir"]);
        $JENKEL = htmlspecialchars($data["jenkel"]);
        $TB = htmlspecialchars($data["tinggibadan"]);
        $NAMACABOR = htmlspecialchars($data["namacabor"]);

        $query = "INSERT INTO tbatlet
                    VALUES
                ('$IDATLET','$NAMAATLET','$TGLLAHIR','$JENKEL','$TB','$NAMACABOR')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;

        $query = "DELETE FROM tbatlet WHERE idatlet = $id";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function edit($data)
    {
        global $conn;
        $id = $data["idatlet"];
        $NAMAATLET = htmlspecialchars($data["namaatlet"]);
        $TGLLAHIR = htmlspecialchars($data["tgllahir"]);
        $JENKEL = htmlspecialchars($data["jenkel"]);
        $TB = htmlspecialchars($data["tinggibadan"]);
        $NAMACABOR = htmlspecialchars($data["namacabor"]);

        $query = "UPDATE tbatlet SET nama_atlet='$NAMAATLET', tgl_lahir='$TGLLAHIR', jk='$JENKEL', tinggi_badan='$TB', cabang_olahraga='$NAMACABOR'
                    WHERE idatlet=$id"; 
                    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
?>

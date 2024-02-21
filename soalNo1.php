<?php 
    $dataUser = array();
    function randomString($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    function generate($user){
        global $dataUser;
        // Mengecek jika sudah ada indexnya dan jika > 10
        if(isset($dataUser[$user]) && count($dataUser[$user]) >= 10){
            array_shift($dataUser[$user]);
            $dataUser[$user][] = randomString(10);
            return end($dataUser[$user]);
        }
        // Memasukan data ke dalam array
        $dataUser[$user][] = randomString(10);
        return end($dataUser[$user]);
    }

    function verifyToken($user,$token){
        global $dataUser;
        // Mengecek apakah key tersedia
        if(array_key_exists($user,$dataUser)){
            // Mengecek token 
            for ($i=0; $i < count($dataUser[$user]); $i++) { 
                if($dataUser[$user][$i] == $token){
                    unset($dataUser[$user][$i]);
                    return True;
                }
            }
        }
        // Jika tidak ada token / key
        return False;
    }
    // Generate 10 token
    for ($i=0; $i < 10; $i++) { 
        generate("Delfan");
    }
    for ($i=0; $i < 10; $i++) { 
        generate("Laden");
    }
    print_r($dataUser);echo "<br><br>";
    generate("Delfan"); // data pertama dihapus, kemudian masuk data baru dibelakang
    // generate("Delfan");
    // print_r($dataUser);echo "<br><br>";
    // echo "Token : ". $dataUser["Delfan"][1];echo "<br><br>";
    // var_dump(verifyToken("Delfan",$dataUser["Delfan"][1]));echo "<br><br>";
    // print_r($dataUser);echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No 1</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Token</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1; 
                foreach($dataUser as $key => $data) { 
                    foreach($data as $item) {?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $key ?></td>
                            <td><?= $item ?></td>
                        </tr>
                <?php $i++; }} ?>
        </tbody>
    </table>
</body>
</html>
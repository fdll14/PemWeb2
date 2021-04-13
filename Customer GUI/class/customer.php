<?php

class Customers{
    private $idcust;
    private $namecust;
    private $addrcust;
    private $phonecust;
    private $citycust;

    function __construct($id,$name,$address,$phone,$city){
        $this->idcust   = $id;
        $this->namecust = $name;
        $this->addrcust = $address;
        $this->phonecust= $phone;
        $this->citycust = $city;
    }

    function InputToArray(){
        $myname = $this->namecust;
        $myid = $this->idcust;
        $itemArray = array($myid=>array('id'=>$this->idcust,'name'=>$this->namecust,'address'=>$this->addrcust,'phone'=>$this->phonecust,'city'=>$this->citycust));

        if(!empty($_SESSION["daftar_cust"])){
            $itemcheck=$_SESSION['daftar_cust'];
            if(in_array($myname,array_column($itemcheck, 'id'))){
                
            }else{
                $_SESSION['daftar_cust']=array_merge($_SESSION['daftar_cust'],$itemArray);
            }
        }else{
            $_SESSION["daftar_cust"] = $itemArray;
        }

    }
}
    function ShowData(){
        if(isset($_SESSION['daftar_cust'])){

            echo '
                <link href="./css/customer.css" rel="stylesheet" type="text/css" media="all"/>
                <table>
                    <thead>
                        <th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>City</th><th>Action</th>
                    </thead>
                    <tbody>';

                    foreach ($_SESSION["daftar_cust"] as $item)
                    {
                        echo '<tr>
                            <td>'.$item['id'].'</td>
                            <td>'.$item['name'].'</td>
                            <td>'.$item['address'].'</td>
                            <td>'.$item['phone'].'</td>
                            <td>'.$item['city'].'</td>
                            <td>
                            <a href="./customergui.php?action=edit&&id='.$item["id"].'" class="myaction">Edit Data</a> 
                            <a href="./customergui.php?action=delete&&id='.$item["id"].'" class="myaction" style="background-color:#e76f51;">Delete Data</a></td></tr>';
                    }
            echo '</tbody>
                </table>';
        }
    }

?>
<?php
function getBalance($address) {
    return file_get_contents('https://explorer.nycoin.info/ext/getbalance/'. $address);
}

echo 'Marketing & advertising funds: ' .  number_format(getBalance('RDFPhetnn9MSqsr6oDHNv3MRSDeNPG5CWX'), 2);

?>
<?php
class burger {

    public function lisaBurger() {
        $this->name = $_POST['burger'];
    }

}

$worker = new burger();
echo $_POST['burger'];

?>
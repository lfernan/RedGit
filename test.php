<?php 
include_once 'core/core.php';
    $m = new Managed();
                $stmt = $m->getUsers(null);
                foreach ($stmt as $row){
                    print <<<END
                    <p>.$row->id.-.$row->mail.</p>
                    END>;
                }
?>
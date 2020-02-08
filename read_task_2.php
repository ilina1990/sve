<?php 
include('base.php');

$lista_sql=$mysqli->query("SELECT * FROM lista WHERE done=1");
if($lista_sql->num_rows > 0){
    while($row=$lista_sql->fetch_assoc()){
    
        echo '<li class="list-group-item">
        <div class="todo-indicator bg-warning"></div>
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2"></div>
                    <div class="widget-content-left">
                        <div class="widget-heading">'.$row['name'].'<div class="badge badge-danger ml-2">Rejected</div>
                    </div>
                    <div class="widget-subheading"><i>By Ilina</i></div>
                </div>       
            </div>
        </div>
    </li>';
    }
}

?>
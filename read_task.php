<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
include('base.php');

$lista_sql=$mysqli->query("SELECT * FROM lista WHERE done=0");
if($lista_sql->num_rows > 0){
    while($row=$lista_sql->fetch_assoc()){
    
        echo '<li class="list-group-item">
        <div class="todo-indicator bg-warning"></div>
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2">
                            <div class="custom-checkbox custom-control"> <input class="custom-control-input" id="'.$row['id'].'" type="checkbox"><label class="custom-control-label" for="'.$row['id'].'">&nbsp;</label> </div>
                    </div>
                    <div class="widget-content-left">
                                <div class="widget-heading">'.$row['name'].'<div class="badge badge-danger ml-2">Rejected</div>
                    </div>
                    <div class="widget-subheading"><i>By Ilina</i></div>
                    </div>
                    <div class="widget-content-right">
                        <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i> </button> <a href="delete.php?id='.$row['id'].'"><button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button></a> </div>
            </div>
        </div>
    </li>';
    }
}

?>

</body>
</html>
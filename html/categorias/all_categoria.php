 <?php include(HTML_DIR . 'overall/header.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/topnav.php'); ?>

 <section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

   <?php
   if(isset($_GET['success'])) {
     echo '<div class="alert alert-dismissible alert-success">
       <strong>Activado!</strong> tu usuario ha sido activado correctamente.
     </div>';
   }

   if(isset($_GET['error'])) {
     echo '<div class="alert alert-dismissible alert-danger">
       <strong>Error!</strong></strong> no se ha podido activar tu usuario.
     </div>';
   }
   ?>

     <div class="row container">
         <ol class="breadcrumbb">
             <div class="pull-right">
                 <a class="colorBtn btn-danger" href="?view=configforos">GESTIONAR FOROS</a>
                 <a class="colorBtn btn-danger active" href="?view=categorias">GESTIONAR CATEGORÍAS</a>
                 <a class="colorBtn btn-danger" href="?view=categorias&mode=add">CREAR CATEGORÍA</a>
             </div>
             <li><a href="?view=index"><i class="fa fa-tags"></i> Categorías</a></li>
         </ol>
     </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
       <div class="row titulo_categoria">Gestión de Categorías</div>

       <div class="row cajas">
         <div class="col-md-12">

           <?php

           if(false != $_categorias) {
            $HTML = '<table class="table-add row"><thead><tr>
            <th style="width: 10%">Id</th>
            <th style="width: 70%">Nombre de categoría</th>
            <th style="width: 20%">Acciones</th>
            </tr></thead>
            <tbody>';
             foreach($_categorias as $id_categoria => $categoria_array) {
                 $HTML .= '<tr>
                   <td>'.$_categorias[$id_categoria]['id'].'</td>
                   <td>'.$_categorias[$id_categoria]['nombre'].'</td>
                   <td>
                     <div class="btn-group">
                      <a href="#" class="colorBtn btn btn-primary dropdown-toggle" data-toggle="dropdown">Acciones <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li><a href="?view=categorias&mode=edit&id='.$_categorias[$id_categoria]['id'].'">Editar</a></li>
                         <li><a onclick="DeleteItem(\'¿Está seguro de eliminar esta categoría?\',\'?view=categorias&mode=delete&id='.$_categorias[$id_categoria]['id'].'\')">Eliminar</a></li>
                      </ul>
                    </div>
                   </td>
                 </tr>';
             }
             $HTML .= '</tbody></table>';
           } else {
             $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ninguna categoría.</div>';
           }

           echo $HTML;
           ?>
         </div>
       </div>
   </div>
 </div>

 </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
 </html>

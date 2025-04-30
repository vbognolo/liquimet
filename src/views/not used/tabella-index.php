<?php
declare(strict_types = 1);                                 
require '../src/setup.php'; 

$section = filter_input(INPUT_GET, 'section', FILTER_VALIDATE_INT);
    if(!$section){
        include 'page-not-found.php';
    }         
    
$id_transport = filter_input(INPUT_GET, 'id_transport', FILTER_VALIDATE_INT);
    if(!$id_transport){
        include 'page-not-found.php';
    }
    
$id = filter_input(INPUT_GET, 'id_transport', FILTER_VALIDATE_INT);
    if(!$id){
        include 'page-not-found.php';
    }

$category = $model->getCategory()->get($section);
$transports = $model->getTransport()->getAll();
$transport = $model->getTransport()->get($id_transport);
$quantity = $model->getQuantity()->get($id);

$countTrans = $model->getTransport()->count();  
$countQty = $model->getQuantity()->count();

$navigation = $category['id_category'];
$section = $category['section'];
$title = $category['name'] . '-' . $category['section']; 
$description = $category['description'];
?>

<!doctype html>
<html>
<head>
    <title>
        <?= html_escape($title) ?>
    </title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../public/css/styles.css"  type="text/css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTable 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
-->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">

<style>
.zeroPadding {
    padding: 0 !important;
}
</style>
</head>

<body>

<?php include '../public/includes/header-1.php'; ?>
    <main class="grid-container">
        <section class="submenu align-items-center my-auto mx-auto p-2">
            <div class="grid-item mx-auto my-3 p-1 justify-content-center">
                <h2 class="my-1 p-4 submenu-title">COSTO LNG</h2>
                <div class="breadcrumb-holder justify-content-center mx-auto p-2">
                    <ul class="rounded-breadcrumbs mx-auto my-auto p-1">
                        <li class="breadcrumb-link active" aria-current="page"><a href="transport.php?section=1">Trasporti</a></li>
                        <li class="breadcrumb-link"><a href="quantities.php?section=2">Quantità</a></li>
                <!--        <li class="breadcrumb-link"><a href="partials.php?section=3">Parziali</a></li> -->
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="transport-table">
            <div class="container-fluid py-1">
                <div class="table-responsive">
                    <table class="table table-trans" id="table-trans">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Slot ID</th>
                                <th scope="col">Numero CMR</th>
                                <th scope="col">Ditta emittente</th>
                                <th scope="col">Fornitore</th>
                                <th scope="col">Trasporto</th>
                                <th scope="col">Univoco</th>
                                <th scope="col">Data carico</th>
                                <th scope="col">Data scarico</th>
                                <th scope="col">Mese carico</th>
                                <th scope="col">Settimana scarico</th>
                                <th scope="col" colspan="2">Mese scarico</th>
                                <th scope="col">Container/ATB</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>
        
                        <tbody>
                        <?php 
                                foreach ($transports as $transport){
                        ?>
                            <tr>
                                <td class="clickable" data-bs-toggle="collapse" data-bs-target="#rowQty" aria-expanded="false">
                                    <?= $t['id_transport'] ?> <i class="bi bi-chevron-down arrowDown"></i> 
                                <!--    <input type="hidden" name="id[]" value="<?= $t['id_transport'] ?>"> -->
                                </td>
                                <td> <?= $t['type'] ?> </td>
                                <td> <?= strtoupper($t['slot']) ?> </td>
                                <td> <?= strtoupper($t['cmr']) ?> </td>
                                <td> <?= strtoupper($t['issuer']) ?> </td>
                                <td> <?= strtoupper($t['supplier']) ?> </td>
                                <td> <?= strtoupper($t['transport']) ?> </td>
                                <td> <?= strtoupper($t['univoco']) ?> </td>
                                <td> <?= date('d-m-Y', strtotime($t['date_load'])) ?> </td>
                                <td> <?= date('d-m-Y', strtotime($t['date_unload'])) ?> </td>
                                <td> <?= $t['id_month_load'] ?> </td>
                                <td> <?= $t['week_unload'] ?> </td>
                                <td colspan="2"> <?= $t['id_month_unload'] . ": " . ucfirst($t['month_unload']) ?> </td>
                                <td> <?= strtoupper($t['container']) ?> </td>
                                <td> <?= $t['note'] ?> </td>
                            </tr>
                        <?php } ?>

                        <?php          
                            while($quantity = $model->getQuantity()->get($id)){  

                                
                        ?>  
                            <tr>
                                <td>
                                <div class="collapse out" id="rowQty" data-bs-parent="#table-trans">
                                    <table class="table table-qty">
                                        <thead>
                                            <tr>
                                                <th scope="col">Energia caricata [MWh]</th>
                                                <th scope="col">Quantità nominale caricata [kg]</th>
                                                <th scope="col">Raffreddamento</th>
                                                <th scope="col">Tipologia costo extra</th>
                                                <th scope="col">Valore costo extra</th>
                                                <th scope="col">Quantità scaricata PD [kg]</th>
                                                <th scope="col">Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>]</th>
                                                <th scope="col">Peso specifico (gas)<br> <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big></th>
                                                <th scope="col">PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big></th>
                                                <th scope="col">PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big></th>
                                                <th scope="col">Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big></th>
                                                <th scope="col">Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big></th>
                                                <th scope="col"><sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub></th>
                                                <th scope="col">Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big></th>
                                                <th scope="col">Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big></th>
                                                <th scope="col"><sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub></th>
                                            </tr>
                                        </thead>
                            
                                        <tbody>        
                                        
                                            <tr class="collapse out">
                                                <td> <?php echo $quantity['kg_load']?> </td>
                                                <td> <?php echo $quantity['cooling']?> </td>
                                                <td> <?php echo $quantity['price_typology']?> </td>
                                                <td> <?php echo $quantity['price_value']?> </td>
                                                <td> <?php echo $quantity['kg_unload']?> </td>
                                                <td> <?php echo $quantity['mwh']?> </td>
                                                <td> <?php echo $quantity['liquid_density']?> </td>
                                                <td> <?php echo $quantity['gas_weight']?> </td>
                                                <td> <?php echo $quantity['mj_kg']?> </td>
                                                <td> <?php echo $quantity['pcs_ghv']?> </td>
                                                <td> <?php echo $quantity['volume_mc']?> </td>
                                                <td> <?php echo $quantity['volume_nmc']?> </td>
                                                <td> <?php echo $quantity['smc_mc']?> </td>
                                                <td> <?php echo $quantity['gas_nmc']?> </td>
                                                <td> <?php echo $quantity['gas_smc']?> </td>
                                                <td> <?php echo $quantity['smc_kg']?> </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table> 
                                
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        
        <script>
    /*        $('.collapse').on('show.bs.collapse', function () {
                $(this).parent().removeClass("zeroPadding");
            });

            $('.collapse').on('hide.bs.collapse', function () {
                $(this).parent().addClass("zeroPadding");
            });
            
            $('table').on('click', '.arrowDown', function(){
                var id = $(this).closest('tr').data('db-id');
                
            })

            
    /*        $(document).ready(function(){
                $('#table-trans').DataTable();
            }); */
        </script>
        </main>
    </body>
    </html>    
        
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-product-select" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>code</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $key_product => $row_product) { ?>
        <tr class="entry-<?=$row_product['product_code']?>">
            <td><?=$row_product['product_code']?></td>
            <td><?=$row_product['quantity']?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<div class="container">
    <h1>Bækur</h1>
    <div class="box">
        <table>
            <tr>
                <td>Titill</td>
                <td>Höfundur</td>
                <td>Útgáfa</td>
                <td>Útgáfuár</td>
                <td>Meira um bókina</td>
            </tr>
            <tbody>
                <?php for($i=0; $i < 4; $i++) { ?>
                    <tr>
                        <td><?php echo $books[$i][0]; ?></td>
                        <td><?php echo $books[$i][1]; ?></td>
                        <td><?php echo $books[$i][2]; ?></td>
                        <td><?php echo $books[$i][3]; ?></td>
                        <td><a href="<<?php echo $books[$i][4]; ?>">
                        <?php echo $books[$i][4]; ?></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
    require_once('script.php');
    $rows_column = ceil(count($brands) / 3);
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<table>
    <tbody>
    <?php
        for ($i=0; $i<$rows_column; $i++ ) : ?>
            <tr>
                <td style="padding:4px">
                    <?php if (isset($brands[$i]['SECTION_PAGE_URL'])) : ?>
                        <a href=""><?=$brands[$i]['NAME'];?></a>
                    <?php else : ?>
                        <?=$brands[$i]['NAME'];?>
                    <?php endif ?>
                </td>
                <td style="padding:4px">
                    <?php if (isset($brands[$i+$rows_column]['SECTION_PAGE_URL'])) : ?>
                        <a href=""><?=$brands[$i+$rows_column]['NAME'];?></a>
                    <?php else : ?>
                        <?=$brands[$i+$rows_column]['NAME'];?>
                    <?php endif ?>
                </td>
                <td style="padding:4px">
                    <?php if (isset($brands[$i+$rows_column*2]['SECTION_PAGE_URL'])) : ?>
                        <a href=""><?=$brands[$i+$rows_column*2]['NAME'];?></a>
                    <?php else : ?>
                        <?=$brands[$i+$rows_column*2]['NAME'];?>
                    <?php endif ?>
                </td>

            </tr>

        <?php endfor;?>

    </tbody>
</table>
</body>
</html>
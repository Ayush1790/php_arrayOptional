<?php
$languages = array();

$languages['Python'] = array(
    "first_release" => "1991",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);

$languages['PHP'] = array(
    "first_release" => "1995",
    "latest_release" => "7.3.11",
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php",
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine
             under Zend Engine License)"
    )
);
?>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid cyan;
        padding: 5px;
    }
</style>
<table>
    <thead>
        <tr>
            <th>language</th>
            <th>First Release</th>
            <th>Latest Release</th>
            <th>Designed By</th>
            <th>Extension</th>
            <th>Typing Discipline</th>
            <th>License</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($languages as $language_key => $language_value) {
            echo "<tr><td>$language_key</td>";
            foreach ($language_value as $x => $value) {
                if (is_array($value)) {
                    foreach ($value as $value_key => $value_value) {
                        echo "<td>$value_value</td>";
                    }
                } else {
                    echo "<td>$value</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
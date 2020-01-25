<table>
    <th>Name</th>
    <th>Model</th>
    <th>Year</th>
    <?php foreach ($cars as $key => $value): ?>
        <tr>
            <td><?= $value['make']; ?>   </td>
            <td><?= $value['model']; ?>  </td>
            <td><?= $value['year']; ?>  </td>
        </tr>
    <?php endforeach; ?>    
</table>
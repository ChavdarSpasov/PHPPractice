<table>
    <th>FirstName</th>
    <th>LastName</th>
    <?php foreach ($customers as $key => $value): ?>
        <tr>
            <td><?= $value['first_name']; ?>   </td>
            <td><?= $value['family_name']; ?>  </td>
        </tr>
    <?php endforeach; ?>    
</table>
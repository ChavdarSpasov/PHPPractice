<table>
    <th>Name</th>
    <th>Job Title</th>
    <th>Hire Date</th>
    <th>Salary</th>
    <th>Actions</th>
    <?php foreach($params as $i => $iv): ?>
        <tr>
            <td><?=$iv['first_name'] . " " . $iv['middle_name'] . " " . $iv['last_name'] ?></td>
            <td><?=$iv['job_title'] ?></td>
            <td><?=$iv['hire_date'] ?></td>
            <td><?=$iv['salary'] ?></td>
            <td><a href="?controller=EmployeeController&action=addProjects&employee_id=<?=$iv['employee_id'] ?>">Add project</a></td>
        </tr>
    <?php endforeach; ?>   
</table>
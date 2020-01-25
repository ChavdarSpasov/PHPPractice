<?php

class EmployeeController extends Controller
{
    public function main()
    {
        header("Location: ?controller=EmployeeController&action=view");
    }

    public function view()
    {
        $m = new EmployeesModel($this->db);
        $res = $m->readAll();

        $this->loadView("header.php");
        $this->loadView("employee/view_all.php",$res);
        $this->loadView("footer.php");
    }

    public function addProjects()
    {
    

        if (isset($_GET['employee_id']) and isset($_POST['save'])) {
            print_r($_POST);die();
        }

        if (isset($_POST['cancel'])) {
            header("Location: ?controller=EmployeeController");        
        }

        $action = "?controller=EmployeeController";
        $action .= "&action=addProjects";
        if (!empty($_GET['employee_id']))
            $action .= "&employee_id=" . $_GET['employee_id'];
        

        $this->loadView("header.php");
        $this->loadView("employee/add_project.php", ['action' =>$action]);
        $this->loadView("footer.php");
    }
}
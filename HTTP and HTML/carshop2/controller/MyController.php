<?php
class MyController extends Controller
{
    public function main()
    {
        include "view/header.php";
        include "view/menu.php";
        include "view/main.php";    

        $inputData = count(explode(', ',$this->input));

        if ($inputData == 6 or 
            $this->input == 'cars' or 
            $this->input == 'sales' or 
            $this->input == 'customers' or
            $this->input == '') {

        switch($this->input){           
            case 'sales': $this->viewSales();
                break;
            case 'customers': $this->viewCustomers();
                break;      
            case 'cars': $this->viewCars();
                break;
            case '':  
                print "Enter your sale information in the box on top!" . "<br>";
                print "Example: Audi, A4, 2004, Ivan, Ivanov, BGN 7000";
                break;
            default: $this->AddSale();
                break;
        }

        include "view/footer.php";
        
        }else{
            include "view/error_page.php";
            include "view/footer.php";
        }
        
    }

    public function viewSales()
    {
        $s = new SalesModel($this->db);
        $sales = $s->readAll();
        $sales_total = $s->readTotal();
        include "view/read_sales.php";
    }

    public function AddSale()
    {

        $saleInfo = explode(', ',$this->input);  
        list($carName,$carModel,
             $carYear,$firstName,
             $lastName,$price) = $saleInfo;

        $amount = intval(trim(str_replace('BGN',' ',$price)));
             
        $car = new CarsModel($this->db);
        $carId = $car->create($carName,$carModel,$carYear);
        
        $customer = new CustomersModel($this->db);
        $customerId = $customer->create($firstName,$lastName);
    
        $sale = new SalesModel($this->db);
        $saleId = $sale->create($carId,$customerId,$amount);

        $saleTime = $sale->getSaleTime($saleId);
        include "view/add_sale.php";
    }

    public function viewCustomers()
    {
        $c = new CustomersModel($this->db);
        $customers =  $c->readAll();
        include "view/read_customers.php";

    }



    public function viewCars()
    {
        $cc = new CarsModel($this->db);
        $cars = $cc->realAll();
        include "view/read_cars.php";
    }

}

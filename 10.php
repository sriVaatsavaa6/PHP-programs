<?php
// Class to represent an Employee
class Employee {
    // Member variables (properties)
    public $emp_name;
    public $emp_id;
    public $emp_dept;
    public $emp_salary;
    public $emp_doj;
    
    // Constructor to initialize employee data
    public function __construct($name, $id, $dept, $salary, $doj) {
        $this->emp_name   = $name;
        $this->emp_id     = $id;
        $this->emp_dept   = $dept;
        $this->emp_salary = $salary;
        $this->emp_doj    = $doj;
    }
    
    // Function to display employee data
    public function displayEmployeeData() {
        echo "Employee Name: " . $this->emp_name . "\n";
        echo "Employee ID: " . $this->emp_id . "\n";
        echo "Department: " . $this->emp_dept . "\n";
        echo "Salary: " . $this->emp_salary . "\n";
        echo "Date of Joining: " . $this->emp_doj . "\n";
        echo "----------------------------\n";
    }
}

// Create objects for Employee 1
$emp1 = new Employee("John Doe", 101, "IT", 50000, "2020-01-15");

// Create objects for Employee 2
$emp2 = new Employee("Jane Smith", 102, "HR", 45000, "2021-02-20");

// Create objects for Employee 3
$emp3 = new Employee("Bob Johnson", 103, "Finance", 55000, "2019-05-10");

// Display employee data
echo "===== EMPLOYEE DATA =====\n\n";
$emp1->displayEmployeeData();
$emp2->displayEmployeeData();
$emp3->displayEmployeeData();
?>

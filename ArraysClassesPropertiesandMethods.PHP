<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Test PHP</h1>
        <?php
/*******************************************
*  part 1 Class, Properties, and methods 
*******************************************/

class Category {
    private $id;
    public $name;

    public function __construct($myid, $myname) {
        $this->id = $myid;
        $this->name = $myname;
    }
    public function getID() {
        return $this->id;
    }
    public function setID($value) {
        $this->id = $value;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }
}

//$brass = new Category(4, 'Brass');
//echo $brass->getName();

//echo $brass->getName();
//echo "<br>";

//print_r($brass);
//echo "<br>";

//echo "<br>";
//echo $brass->setName("Bill Jing");
//echo "<br>";
//echo $brass->getName();

/*************************************
*  part 2 Product
*************************************/
/*
class Product {
    private $category, $id, $code, $name, $price;

    public function __construct($category, $code, $name, $price) {
        $this->category = $category;
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
    }
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($value) {
        $this->category = $value;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }
    public function getCode() {
        return $this->code;
    }

    public function setCode($value) {
        $this->code = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPriceFormatted() {
        $formatted_price = 
            number_format($this->price, 2);
        return $formatted_price;
    }

    public function setPrice($value) {
        $this->price = $value;
    }

    public function getDiscountPercent() {
        $discount_percent = 30;
        return $discount_percent;
    }

    public function getDiscountAmount() {
        $discount_percent = 
            $this->getDiscountPercent()/ 100;
        $discount_amount = $this->price * $discount_percent;
        $discount_amount_r = round($discount_amount, 2);
        $discount_amount_f = 
        number_format($discount_amount_r, 2);
        return $discount_amount_f;
    }
    public function getDiscountPrice() {
        $discount_price = 
            $this->price - $this->getDiscountAmount();
        $discount_price_f = 
            number_format($discount_price, 2);
        return $discount_price_f;
    }
    public function getImageFilename() {
        $image_filename = $this->code . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = 
            '../images/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText() {
        $image_alt = 
            'Image: ' . $this->getImageFilename();
        return $image_alt;
    }
}
//$brass = new Category(4, 'Brass');
//$aProduct = new Product($brass,'Getzen', 'Getzen 700SP Trumpet', 999.95);
//print_r($aProduct);
*/
/*************************************
*  part 3  constant/static 
*************************************/
/*
//constant
class Person {
    //all constant are public
    const GREEN_EYES = 1;
    const BLUE_EYES = 2;
    const BROWN_EYES = 3;

    private $eye_color;

    public function getEyeColor() { 
        return $this->eye_color; 
    }

    public function setEyeColor($value) {
        if ($value == self::GREEN_EYES || 
            $value == self::BLUE_EYES || 
            $value == self::BROWN_EYES) {
            $this->eye_color = $value;
        } else {
            exit('Eye Color Not Set');
        }
    }
}
$person = new Person();
$person->setEyeColor(Person::GREEN_EYES);
print_r($person);
echo $person->GREEN_EYES;
echo Person::GREEN_EYES;
*/

/*
//Static property/method
class Category {
    private $id, $name;
    private static $objectCount = 0;   
    // declare a static property

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        self::$objectCount++;          
        // update the static property
    }

    // A public method that gets the static property
    public static function getObjectCount(){
        return self::$objectCount;
    }

    // The rest of the methods for the Category class
}

$brass1 = new Category(1, 'Guitars');
$brass2 = new Category(2, 'Bass');
$brass3 = new Category(2, 'Bass');

echo '<p>Object count: ' .  Category::getObjectCount() . '</p>';

$brass4 = new Category(3, 'Drums');
echo '<p>Object count: ' .  Category::getObjectCount() . '</p>';
//echo '<p>Object count: ' .  Category::$objectCount . '</p>';
*/

/*
//if not a Static
//Static property/method
class Category {
    private $id, $name;
    // declare as non-static property
    private $objectCount = 0;   
    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->objectCount++;          
    }

    // A public method that gets the non-static property
    public function getObjectCount(){
        return $this->objectCount;
    }
}

$brass1 = new Category(1, 'Guitars');
$brass2 = new Category(2, 'Bass');
$brass3 = new Category(3, 'Bass');
$brass4 = new Category(4, 'Drums');
echo '<p>Object count: ' .  $brass4->getObjectCount() . '</p>';
*/

/*****************************************************************
*  part 4
*  Questions:  1. why $brass need to be created?
*              2. why we need to remove comments part1 and
                  part 2 when we run part 4?
*              3. why result3 return false?
*              4. why result5 retuen true?
******************************************************************/
/*
//clone $objectName
//An object to clone
$brass = new Category(4, 'Brass');
$trumpet = new Product($brass,'Getzen', 'Getzen 700SP Trumpet', 999.95);

//Create a second reference to the object
$trombone = $trumpet;

// both variables refer to the same object
$trombone->setPrice(699.95);   
// changes the price for both variables
echo $trombone->getPrice();
echo $trumpet->getPrice();


// copy the object
$trombone = clone $trumpet;    
$trombone->setPrice(899.95);   
// this only changes the price for trombone
echo $trombone->getPrice();
echo $trumpet->getPrice();


//The copies are shallow copies
$trombone->getCategory()->setName('Orchestral Brass');
echo $trombone->getCategory()->getName();
echo $trumpet->getCategory()->getName();
//Both Displays 'Orchestral Brass'


$result_1 = ($trumpet == $trombone);
// $result_1 is FALSE

$flugelhorn = clone $trumpet;
$result_2 = ($trumpet == $flugelhorn);
// $result_2 is TRUE

//Using the === operator to compare objects
$result_3 = ($trumpet === $flugelhorn);  
// $result_3 is FALSE

$trumpet_2 = $trumpet;
$result_4 = ($trumpet === $trumpet_2);   
// $result_4 is TRUE

$result_5 = ($trumpet->getCategory() ===  $trombone->getCategory());
// $result_5 is TRUE
*/

/***********************************************************************
*  part 5 Functions for inspecting an object
************************************************************************/
/*
class_exists($class)
get_class($object)
is_a($object, $class)
property_exists($object, $property)
method_exists($object, $method)
*/

/*
if(class_exists("Category"))
    echo "Category exists!";
else
    echo "Category does not exist!";
*/

/***********************************************************************
*  part 6 Inheritance 
*  Questions: 1. why $emp can access setPhone('919-555-4321') method?
*
************************************************************************/
/*
class Person {
    private $firstName, $lastName, $phone, $email;

    public function __construct($first, $last) {
        $this->firstName = $first;
        $this->lastName  = $last;
    }

    public function getFirstName()       
        { return $this->firstName;   }
    public function setFirstName($value) 
        { $this->firstName = $value; }
    public function getLastName()        
        { return $this->lastName;   }
    public function setLastName($value)  
        { $this->lastName = $value; }
    public function getPhone()           
        { return $this->phone;   }
    public function setPhone($value)     
        { $this->phone = $value; }
    public function getEmail()           
        { return $this->email;   }
    public function setEmail($value)     
        { $this->email = $value; }
}

class Employee extends Person {
    private $ssn, $hireDate;

    public function __construct(
            $first, $last, $ssn, $hireDate) {
        $this->ssn = $ssn;
        $this->hireDate = $hireDate;

        // Finish initialization
        parent::__construct($first, $last);
    }

    public function getSSN()            
        { return $this->ssn;   }
    public function setSSN($value)      
        { $this->ssn = $value; }
    public function getHireDate()       
        { return $this->hireDate;   }
    public function setHireDate($value) 
        { $this->hireDate = $value; }
}

$emp = new Employee(
    'John', 'Doe', '999-14-3456', '8-25-1996');
$emp->setPhone('919-555-4321');  
// Inherited from Person Class
*/

/***********************************************************************
*  part 7 How protected properties work
*  Questions: 1. why $emp can access setPhone('919-555-4321') method?
*
************************************************************************/
/*
class Person {
	private   $salary = 5000;
    protected $firstName="Bill", $lastName="Jing";
    public   $phone="(859)442-1105", $email="bill.jing@kctcs.edu";

    // get and set methods 
	public function getSalary()
	{
		return $this->salary;
	}
}

//A subclass
class Employee extends Person {
    private $ssn, $hireDate;
//    protected $habit; 

    // Using the protected properties rom the Person class
    public function getFullName() {
        return $this->lastName . ', ' . 
                $this->firstName;
    }
}

$empBillJing = new Employee();

echo $empBillJing->getFullName();
echo "<br>";
//echo $empBillJing->phone;
echo $empBillJing->getSalary();
*/

/*************************************
*  part 8 Asbtract Class
*************************************/
/*
abstract class Person {
    private $firstName, $lastName, $phone, $email;
	
    public function __construct($first, $last) {
        $this->firstName = $first;
        $this->lastName  = $last;
    }

    // get and set methods
    public function getFirstName()       
        { return $this->firstName;   }
    public function setFirstName($value) 
        { $this->firstName = $value; }
    public function getLastName()        
        { return $this->lastName;   }
    public function setLastName($value)  
        { $this->lastName = $value; }
    public function getPhone()           
        { return $this->phone;   }
    public function setPhone($value)     
        { $this->phone = $value; }
    protected function getEmail()           
        { return $this->email;   }
    public function setEmail($value)     
        { $this->email = $value; }

    // An abstract method
    abstract public function getFullName();
}

//$apersonObject = new Person();

class Customer extends Person {
    private $cardNumber, $cardType;

    public function __construct(
            $first, $last, $phone, $email) {
        $this->setPhone($phone);
        $this->setEmail($email);
        parent::__construct($first, $last);
    }

    public function getCardNumber()       
        { return $this->cardNumber;   }
    public function setCardNumber($value) 
        { $this->cardNumber = $value; }
    public function getCardType()         
        { return $this->cardType;   }
    public function setCardType($value)   
        { $this->cardType = $value; }

		// Concrete implementation of the abstract method
    public function getFullName() {
        return $this->getFirstName() . ' ' . 
               $this->getLastName();
    }
	public function getEmail()          
        { return parent::getEmail();   }
    
}

$customer = new Customer(
    'John', 'Doe', '919-555-4321', 'jdoe@example.com');
//echo '<p>' . $customer->getFullName() . '</p>';
echo $customer->getEmail();
*/

/*********************************************
*  part 9 Final Class/Method
*********************************************/
//final class
/*
class Person {
    // Other properties and methods not shown here

    final public function getFirstName() {
        return $this->firstName;
    }
}

//A subclass that tries to override the final method
class Employee extends Person {
    // Other properties and methods not shown here

    // Attempt to override a final method - fatal error
    public function getFirstName() {
        return ucwords($this->firstName);
    }
}
*/

//Final Class

final class Employee{
    // Properties and methods for class
}
//A class that attempts to inherit the final class
class PartTime extends Employee {
    // Properties and methods for class
}

        ?>
    </main>
</body>
</html>
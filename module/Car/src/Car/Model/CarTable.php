<?php
namespace Car\Model;

 use Zend\Db\TableGateway\TableGateway;
 use Zend\Db\Sql\Select;

 class CarTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
     //Method for retrieving all Cars from the database
     public function fetchAll()
     { 
         //Old resultSet, which doesn't sort all Car entries in order of their id
         //$resultSet = $this->tableGateway->select();
         //New resultSet, in which inside the tableGateway's select method, a function is passed...
         //...in which the selection is sorted by the car Table's id field in descending order
         $resultSet = $this->tableGateway->select(function (Select $select) {
             //Have the selection be in descending order according to the ID
            $select->order('id DESC');
         });
         //Return the resultSet
         return $resultSet;
     }
     //Method for retrieving a single car by it's "id" value
     public function getCar($id) {

         $id  = (int) $id;
         $rowset = $this->tableGateway->select(array('id' => (int) $id));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $id");
         }
         return $row;
     }
     //Method called for updating/adding a Car value
     public function saveCar(Car $car)
     {
         $data = array(
             'carPicture' => $car->carPicture,
             'carPic2' => $car->carPic2,
             'carPic3' => $car->carPic3,
             'carPic4' => $car->carPic4,
             'carPic5' => $car->carPic5,
             'carPic6' => $car->carPic6,
             'carPic7' => $car->carPic7,
             'carPic8' => $car->carPic8,
             'carPic9' => $car->carPic9,
             'carPic10' => $car->carPic10,
             'make' => $car->make,
             'model'  => $car->model,
             'modelYear'  => $car->modelYear,
             'details'  => $car->details,
             'engineSize'  => $car->engineSize,
             'brochureSize'  => $car->brochureSize,
             'topSpeed'  => $car->topSpeed,
             'noughtToSixty'  => $car->noughtToSixty,
             'enginePowerBHP'  => $car->enginePowerBHP,
             'drivetrain'  => $car->drivetrain,
             'economyUrban'  => $car->economyUrban,
             'economyExtraUrban'  => $car->economyExtraUrban,
             'economyCombined'  => $car->economyCombined,
             'emissions'  => $car->emissions,
             'annualTax'  => $car->annualTax,
             'mileage'  => $car->mileage,
             'bodyType'  => $car->bodyType,
             'noOfDoors'  => $car->noOfDoors,
             'noOfSeats'  => $car->noOfSeats,
             'transmission'  => $car->transmission,
             'fuelType'  => $car->fuelType,
             'colour'  => $car->colour,
             'price'  => $car->price,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model,
             'model'  => $car->model
         );
         //Get the ID number of the car
         $id = (int) $car->id;
         //If the ID equals 0
         if ($id == 0) {
             //Insert the data into the table
             $this->tableGateway->insert($data);
         //Otherwise
         } else {
             //If the getCar method, using this ID, returns a value
             if ($this->getCar($id)) {
                 //Update the table where the edited car's ID equals the ID we have
                 $this->tableGateway->update($data, array('id' => $id));
             //Otherwise
             } else {
                 //Throw a new Exception, with the message that the car does not exist
                 throw new \Exception('Car id does not exist');
             }
         }
     }
     //Method for deleting a Car from the database by it's "id" value
     public function deleteCar($id)
     {
         $this->tableGateway->delete(array('id' => (int) $id));
     }
 }
<?php

namespace Car\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Car\Model\Car;
use Car\Form\CarForm;
use Zend\Validator\File\Size;
use Zend\Validator\File\MimeType;
use Zend\Filter\File\Rename;


class CarController extends AbstractActionController {

    protected $carTable;

    public function indexAction() {
        //Return a new ViewModle instance, inside it an array of Cars that is returned...
        //...by calling this controller's getCarTable return value's fetchAll method
        return new ViewModel(array(
            'cars' => $this->getCarTable()->fetchAll()
        ));
    }

    public function addAction() {
        //Create a new instance of the CarForm class from the "form" directory in...
        //...the "Car" superdirectory under "module"
        $form = new CarForm();
        //Get the "submit" button from the form and set it's text value to "Add"
        $form->get('submit')->setValue('Add');
        //Variable for the request object retrieved by this controller
        $request = $this->getRequest();
        //Check to see if the request is posted (i.e. if the form is submitted)
        //...by checking if the request object's isPost method returns true
        if ($request->isPost()) {
            //Create a new instance of the Car class from the "Model" directory in...
            //...the "Car" superdirectory under "module"
            $car = new Car();
            //Set the input filter/validation of the form and it's fields
            $form->setInputFilter($car->getInputFilter());
            //Variable retrieving all files deteced in the file input fields, to an array
            $files = $request->getFiles()->toArray();
            //Merge the non-file (text, textarea, select) data and the uploaded files...
            //...together in a single array
            $data = array_merge_recursive(
                    $request->getPost()->toArray(), 
                    $files
            ); 
            //Set the posted data to this form, as in the event of invalid input....
            //...any valid input fields will retain their values on reload
            $form->setData($data);
            //Boolean for if all available files are successful
            $uploadSuccessful = true;
            //If the form data is valid
            if ($form->isValid()) {
                //Set a Size instance with a minimum file size of 1500000 bytes/1.5 MB
                $size = new Size(array('min' => 1500000));
                //Set a MimeType instance with an allowed value of jpg and jpeg
                $mime = new MimeType(['mimeType' => 'image/jpg,image/jpeg']);
                //Instantiate a new HTTP adapter
                $adapter = new \Zend\File\Transfer\Adapter\Http(); 
                //Set the validators for the adapter as checking the file sizes of all uploaded files..
                //..This also overwrites any existing validators attached
                foreach ($files as $file => $info) { 
                    //If the current file name is not empty
                    if (!empty($info['name'])) { 
                        //Variable for storing the path to the images subdirectory in the "public" directory
                        $path = getcwd() . '/public/img'; 
                        //Set the destination the adapter, where the uploaded files will go to
                        $adapter->setDestination($path);
                        $currentFilename = $info['name'];  
                        //Variable for storing the path to the images subdirectory in the "public" directory
                        $path = getcwd() . '/public/img'; 
                        //Set the Size validator in the adapter
                        $adapter->setValidators(array($size), $currentFilename);
                        //Set the MimeType validator in the adapter
                        $adapter->setValidators(array($mime), $currentFilename);
                        //Create a new Rename filter, which will rename the uploaded file as the current filename...
                        //...with any ".JPG" replaced to allow file formatting
                        $renameFilter = new Rename(array('target' => $path . '\\' . (str_replace('.JPG', '', $currentFilename)) . '.jpg',
                        'overwrite' => true));
                        //Set the rename filter in the adapter
                        $adapter->setFilters(array($renameFilter), $currentFilename);            
                        //If the adapter is invalid
                        if ($adapter->isValid()) {
                            //If the adapter did not receive the current file
                            if (!$adapter->receive($file)) {
                                //Set the uploadIsSuccessful boolean to false
                                $uploadSuccessful = false;
                            }
                        }
                    }
                }
                //If the uploadSuccessful boolean remains true
                if ($uploadSuccessful == true) {
                    /*
                     * AND NOW TO SAVE OUR NEW CAR
                     */
                    //Call "exchangeArray" from the model to grab data from the form
                    $car->exchangeArray($form->getData());
                    //Integer for counting how many files have been uploaded, with a default of 0
                    $iterator = 0;
                    //For each file in the $files array, get the current file as $current
                    foreach ($files as $current) {
                        //If the iterator integer equals 0
                        if ($iterator == 0) {
                            //Set the value of the first car image as the current filename
                            $car->carPicture = $current['name'];
                            //If the iterator integer equals 1
                        } else if ($iterator == 1) {
                            //Set the value of the second car image as the current filename
                            $car->carPic2 = $current['name'];
                            //If the iterator integer equals 2
                        } else if ($iterator == 2) {
                            //Set the value of the third car image as the current filename
                            $car->carPic3 = $current['name'];
                            //If the iterator integer equals 3
                        } else if ($iterator == 3) {
                            //Set the value of the forth car image as the current filename
                            $car->carPic4 = $current['name'];
                           //If the iterator integer equals 4
                        } else if ($iterator == 4) {
                            //Set the value of the fifth car image as the current filename
                            $car->carPic5 = $current['name'];
                            //If the iterator integer equals 5
                        } else if ($iterator == 5) {
                            //Set the value of the sixth car image as the current filename
                            $car->carPic6 = $current['name'];
                            //If the iterator integer equals 6
                        } else if ($iterator == 6) {
                            //Set the value of the seventh car image as the current filename
                            $car->carPic7 = $current['name'];
                            //If the iterator integer equals 7
                        } else if ($iterator == 7) {
                            //Set the value of the eight car image as the current filename
                            $car->carPic8 = $current['name'];
                            //If the iterator integer equals 8
                        } else if ($iterator == 8) {
                            //Set the value of the ninth car image as the current filename
                            $car->carPic9 = $current['name'];
                            //If the iterator integer equals 9
                        } else if ($iterator == 9) {
                            //Set the value of the tenth car image as the current filename
                            $car->carPic10 = $current['name'];
                        }
                        //Increase the iterator
                        $iterator++;
                    }
                    //Get the CarTable of this controller, then pass the car data to it's...
                    //...saveCar method, adding the new car to the table/model
                    $this->getCarTable()->saveCar($car);
                    //Redirect back to the list of cars
                    return $this->redirect()->toRoute('car'); 
                }
            } else {
                //For each message retrieved from the form concering it's error/validation
                foreach ($form->getMessages() as $msgId => $msg) {
                    //Echo the current message's details
                    echo "Validation error: $msgId => $msg";
                }
            }
        }
        //Return the form as an array
        return array('form' => $form);
    }

    public function editAction() {
        //Get the "id" value from the URL route/parameters. If there is none, set it to 0
        $id = (int) $this->params()->fromRoute('id', 0);
        //If there is no id/if it is 0
        if (!$id) {
            //Redirect back to the "add" page by calling this Controller's "addAction"
            return $this->redirect()->toRoute('car', array(
                        'action' => 'add'
            ));
        }
        //Try statement
        try {
            //Get the Car from the CarTable's getCar method using the specified id
            $car = $this->getCarTable()->getCar($id);
            //If the car is not found
        } catch (\Exception $ex) {
            //Redirect back to the index page by calling the CarController's indexAction
            return $this->redirect()->toRoute('car', array(
                        'action' => 'index'
            ));
        }
        //Instantiate a new CarForm from the "Form" directory under the "Car" superdirectory..
        //...in the "module"
        $form = new CarForm();
        //Bind the model/Car to the form, passing the Car's values per field onto the form's...
        //...equivelant input fields
        $form->bind($car); 
        //Get the "submit" button in the form and change it's text value to "Edit"
        $form->get('submit')->setAttribute('value', 'Edit');
        ///Variable for the request object retrieved by this controller
        $request = $this->getRequest();
        if ($request->isPost()) {
            //Create a new instance of the Car class from the "Model" directory in...
            //...the "Car" superdirectory under "module"
            $car = new Car();
            //Set the input filter/validation of the form and it's fields
            $form->setInputFilter($car->getInputFilter());
            //Array containing all files that the request is containing
            $files = $request->getFiles()->toArray();
            //Merge the non-file data and the uploaded files together in a single array
            $data = array_merge_recursive(
                    $request->getPost()->toArray(), 
                    $files
            ); 
            //Set the posted data to this form, as in the event of invalid input....
            //...any valid input fields will retain their values on reload
            $form->setData($data);
            //Boolean for if all available files are successful
            $uploadSuccessful = true;
            //If the form data is valid
            if ($form->isValid()) {
                //Set a Size instance with a minimum file size of 1500000 bytes/1.5 MB
                $size = new Size(array('min' => 1500000));
                //Set a MimeType instance with an allowed value of jpg and jpeg
                $mime = new MimeType(['mimeType' => 'image/jpg,image/jpeg']);
                //Instantiate a new HTTP adapter
                $adapter = new \Zend\File\Transfer\Adapter\Http(); 
                //Set the validators for the adapter as checking the file sizes of all uploaded files..
                //..This also overwrites any existing validators attached
                foreach ($files as $file => $info) { 
                    //If the current file name is not empty
                    if (!empty($info['name'])) { 
                        //Variable for storing the path to the images subdirectory in the "public" directory
                        $path = getcwd() . '/public/img'; 
                        //Set the destination the adapter, where the uploaded files will go to
                        $adapter->setDestination($path);
                        $currentFilename = $info['name'];  
                        //Variable for storing the path to the images subdirectory in the "public" directory
                        $path = getcwd() . '/public/img'; 
                        //Set the Size validator in the adapter
                        $adapter->setValidators(array($size), $currentFilename);
                        //Set the MimeType validator in the adapter
                        $adapter->setValidators(array($mime), $currentFilename);
                        //Create a new Rename filter, which will rename the uploaded file as the current filename...
                        //...with any ".JPG" replaced to allow file formatting
                        $renameFilter = new Rename(array('target' => $path . '\\' . (str_replace('.JPG', '', $currentFilename)) . '.jpg',
                        'overwrite' => true));
                        //Set the rename filter in the adapter
                        $adapter->setFilters(array($renameFilter), $currentFilename);            
                        //If the adapter is invalid
                        if ($adapter->isValid()) {
                            //If the adapter did not receive the current file
                            if (!$adapter->receive($file)) {
                                //Set the uploadIsSuccessful boolean to false
                                $uploadSuccessful = false;
                            }
                        }
                    }
                }
                //If the uploadSuccessFul boolean remains true
                if ($uploadSuccessful == true) {
                    /*
                     * AND NOW TO SAVE OUR NEW CAR
                     */
                    //Call "exchangeArray" from the model to grab data from the form
                    $car->exchangeArray($form->getData());
                    //Integer for counting how many files have been uploaded, with a default of 0
                    $iterator = 0;
                    //For each file in the $files array, get the current file as $current
                    foreach ($files as $current) {
                        //If the iterator integer equals 0
                        if ($iterator == 0) {
                            //Set the value of the first car image as the current filename
                            $car->carPicture = $current['name'];
                            //If the iterator integer equals 1
                        } else if ($iterator == 1) {
                            //Set the value of the second car image as the current filename
                            $car->carPic2 = $current['name'];
                            //If the iterator integer equals 2
                        } else if ($iterator == 2) {
                            //Set the value of the third car image as the current filename
                            $car->carPic3 = $current['name'];
                            //If the iterator integer equals 3
                        } else if ($iterator == 3) {
                            //Set the value of the forth car image as the current filename
                            $car->carPic4 = $current['name'];
                           //If the iterator integer equals 4
                        } else if ($iterator == 4) {
                            //Set the value of the fifth car image as the current filename
                            $car->carPic5 = $current['name'];
                            //If the iterator integer equals 5
                        } else if ($iterator == 5) {
                            //Set the value of the sixth car image as the current filename
                            $car->carPic6 = $current['name'];
                            //If the iterator integer equals 6
                        } else if ($iterator == 6) {
                            //Set the value of the seventh car image as the current filename
                            $car->carPic7 = $current['name'];
                            //If the iterator integer equals 7
                        } else if ($iterator == 7) {
                            //Set the value of the eight car image as the current filename
                            $car->carPic8 = $current['name'];
                            //If the iterator integer equals 8
                        } else if ($iterator == 8) {
                            //Set the value of the ninth car image as the current filename
                            $car->carPic9 = $current['name'];
                            //If the iterator integer equals 9
                        } else if ($iterator == 9) {
                            //Set the value of the tenth car image as the current filename
                            $car->carPic10 = $current['name'];
                        }
                        //Increase the iterator
                        $iterator++;
                    }
                    //Get the CarTable of this controller, then pass the car data to it's...
                    //...saveCar method, adding the new car to the table/model
                    $this->getCarTable()->saveCar($car);
                    //Redirect to the "viewcar" action of this controller, passing it the current car's id
                    return $this->redirect()->toRoute('car', array(
                        'action' => 'viewcar',
                        'id' => $id
                    ));
                }
            } else {
                //For each message retrieved from the form concering it's error/validation
                foreach ($form->getMessages() as $msgId => $msg) {
                    //Echo the current message's details
                    echo "Validation error: $msgId => $msg";
                }
            }
        }
        //Return the array, containing the id and form values for the phtml of the action...
        //...to retrieve and display their values
        return array(
            'id' => $id,
            'form' => $form,
        );
    }

    public function deleteAction() {
        //Get the "id" value from the URL route/parameters. If there is none, set it to 0
        $id = (int) $this->params()->fromRoute('id', 0);
        //If there is no id/if it is 0
        if (!$id) {
            //Redirect back to the car listing/index page
            return $this->redirect()->toRoute('car');
        }
        //Get the request sent to this action
        $request = $this->getRequest();
        //If the request is a post
        if ($request->isPost()) {
            //Get the input from the request titled "del", the one with the value of "No"
            $del = $request->getPost('del', 'No'); 
            //If the del value holds the value of "Yes"
            if ($del == 'Yes') {
                //Get the value of the hidden "id" field from the input, cast to integer and...
                //...store as a variable
                $id = (int) $request->getPost('id');
                //Call this controller's getCarTable's deleteCar method, passing it the id
                $this->getCarTable()->deleteCar($id);
            }
            // Redirect to list of cars
            return $this->redirect()->toRoute('car');
        }
        //Return an array containing the id and current car values (the latter using the...
        //...CarTable's getCar method using the id) for the phtml of this action to retrieve and operate on
        return array(
            'id' => $id,
            'car' => $this->getCarTable()->getCar($id)
        );
    }

    public function viewcarAction() {
        //Get the "id" value from the URL route/parameters. If there is none, set it to 0
        $id = (int) $this->params()->fromRoute('id', 0);
        //If there is no id/if it is 0
        if (!$id) {
            //Redirect back to the car listing/index page
            return $this->redirect()->toRoute('car');
        }
        //Return the array storing the id and the current car (retrieved using this controller's...
        //...CarTable's getCar method, passing it the id), for the phtml of this action to retrieve...
        //...and display
        return array(
            'id' => $id,
            'car' => $this->getCarTable()->getCar($id)
        );
    }

    public function getCarTable() {
        //If this controller's CarTable has not been instantiated
        if (!$this->carTable) {
            //Get this controller's service locator
            $sm = $this->getServiceLocator();
            //Define this controller's CarTable by calling the serviceLocator's get method...
            //....passing it the path to the CarTable file in the Model subdirectory in...
            //...the Car superdirectory under "module"
            $this->carTable = $sm->get('Car\Model\CarTable');
        }
        //Return the carTable of this controller
        return $this->carTable;
    }

}

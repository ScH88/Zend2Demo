<?php

namespace Car\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\Filter\File\RenameUpload;
use Zend\InputFilter\FileInput;
use Zend\Validator\File\MimeType;
use Zend\Validator\File\Size;

class Car {

    //Local variables for each field in the "Car" table under the "real_autos" database
    public $id;
    public $carPicture;
    public $carPic2;
    public $carPic3;
    public $carPic4;
    public $carPic5;
    public $carPic6;
    public $carPic7;
    public $carPic8;
    public $carPic9;
    public $carPic10;
    public $make;
    public $model;
    public $modelYear;
    public $details;
    public $engineSize;
    public $brochureSize;
    public $topSpeed;
    public $noughtToSixty;
    public $enginePowerBHP;
    public $drivetrain;
    public $economyUrban;
    public $economyExtraUrban;
    public $economyCombined;
    public $emissions;
    public $annualtax;
    public $mileage;
    public $bodyType;
    public $noOfDoors;
    public $noOfSeats;
    public $transmission;
    public $fuelType;
    public $colour;
    public $price;
    //
    protected $inputFilter;

    public function exchangeArray($data) {
        //For each field in the table - Under the appropriate field name (e.g. id, carPicture, make...
        //...model e.t.c) in the $data bundle passed to the parameter, if the value under that field...
        //...is not empty, set this car's value as the field's content. Otherwise, set it to null.
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->carPicture = (!empty($data['carPicture'])) ? $data['carPicture'] : null;
        $this->carPic2 = (!empty($data['carPic2'])) ? $data['carPic2'] : null;
        $this->carPic3 = (!empty($data['carPic3'])) ? $data['carPic3'] : null;
        $this->carPic4 = (!empty($data['carPic4'])) ? $data['carPic4'] : null;
        $this->carPic5 = (!empty($data['carPic5'])) ? $data['carPic5'] : null;
        $this->carPic6 = (!empty($data['carPic6'])) ? $data['carPic6'] : null;
        $this->carPic7 = (!empty($data['carPic7'])) ? $data['carPic7'] : null;
        $this->carPic8 = (!empty($data['carPic8'])) ? $data['carPic8'] : null;
        $this->carPic9 = (!empty($data['carPic9'])) ? $data['carPic9'] : null;
        $this->carPic10 = (!empty($data['carPic10'])) ? $data['carPic10'] : null;
        $this->make = (!empty($data['make'])) ? $data['make'] : null;
        $this->model = (!empty($data['model'])) ? $data['model'] : null;
        $this->modelYear = (!empty($data['modelYear'])) ? $data['modelYear'] : null;
        $this->details = (!empty($data['details'])) ? $data['details'] : null;
        $this->engineSize = (!empty($data['engineSize'])) ? $data['engineSize'] : null;
        $this->brochureSize = (!empty($data['brochureSize'])) ? $data['brochureSize'] : null;
        $this->topSpeed = (!empty($data['topSpeed'])) ? $data['topSpeed'] : null;
        $this->noughtToSixty = (!empty($data['noughtToSixty'])) ? $data['noughtToSixty'] : null;
        $this->enginePowerBHP = (!empty($data['enginePowerBHP'])) ? $data['enginePowerBHP'] : null;
        $this->drivetrain = (!empty($data['drivetrain'])) ? $data['drivetrain'] : null;
        $this->economyUrban = (!empty($data['economyUrban'])) ? $data['economyUrban'] : null;
        $this->economyExtraUrban = (!empty($data['economyExtraUrban'])) ? $data['economyExtraUrban'] : null;
        $this->economyCombined = (!empty($data['economyCombined'])) ? $data['economyCombined'] : null;
        $this->emissions = (!empty($data['emissions'])) ? $data['emissions'] : null;
        $this->annualTax = (!empty($data['annualTax'])) ? $data['annualTax'] : null;
        $this->mileage = (!empty($data['mileage'])) ? $data['mileage'] : null;
        $this->bodyType = (!empty($data['bodyType'])) ? $data['bodyType'] : null;
        $this->noOfDoors = (!empty($data['noOfDoors'])) ? $data['noOfDoors'] : null;
        $this->noOfSeats = (!empty($data['noOfSeats'])) ? $data['noOfSeats'] : null;
        $this->transmission = (!empty($data['transmission'])) ? $data['transmission'] : null;
        $this->fuelType = (!empty($data['fuelType'])) ? $data['fuelType'] : null;
        $this->colour = (!empty($data['colour'])) ? $data['colour'] : null;
        $this->price = (!empty($data['price'])) ? $data['price'] : null;
    }

    public function setInputFilter(InputFilterInterface $inputFilter) {
        throw new \Exception("Not used");
    }

    public function getInputFilter() {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $inputFilter->add(array(
                'name' => 'id',
                //Ensure the id field is required (i.e. not null, always there)
                'required' => true,
                //Add the following filter
                'filters' => array(
                    //Ensure the "id" value is always an integer
                    array('name' => 'Int'),
                ),
            )); 
            $inputFilter->add(array(
                'name'=>'carPicture',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic2',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic3',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic4',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic5',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic6',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic7',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic8',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic9',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name'=>'carPic10',
                'required'=>true,
                'filters' => [
                    //Have the name be stripped of all html and php tags
                    ['name' => 'StripTags'],
                    //Have the name be stripped of all whitespace
                    ['name' => 'StringTrim'],
                ],
            ));
            $inputFilter->add(array(
                'name' => 'make',
                //Add the following validator
                'validators' => array(
                    array(
                        //Ensure this filter is a "NotEmpty" type
                        'name' => 'NotEmpty',
                        'options' => array(
                            //If the value is empty, show this message
                            'messages' => array('isEmpty' => 'Drop Down Input "Make" Is Empty. Please Select An Option')
                        ),
                    ),
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                )
            )); 
            $inputFilter->add(array(
                'name' => 'model',
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "make" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 100
                            'max' => 200,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 200')
                        ),
                    ),
                ),
            )); 
            $inputFilter->add(array(
                'name' => 'modelYear',
                //Add the following filters
                'filters' => array(
                    //Ensure the modelYear id" value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1900
                    'min' => 1900,
                    //Ensure a maximum character length of the current year
                    'max' => date("Y"),
                    //Add the following message if the value is not in between
                    'messages' => array('notBetween' => 'Value must be between 1900 and the current year')
                )
            )); 
            $inputFilter->add(array(
                'name' => 'brochureSize',
                //Add the following validator
                'validators' => array( 
                    array('Float',
                        'name' => 'Between', 
                        'options' => array(
                            //Ensure a minimum character value of 1
                            'min' => 1,
                            //Ensure a maximum character value of 9999
                            'max' => 9999,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 9999')
                        )
                    )
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'engineSize',
                //Add the following filter
                'filters' => array(
                    //Ensure the engineSize value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 99
                    'max' => 99,
                    //Add the following message if the value is not in between
                    'messages' => array('notBetween' => 'Value must be between 1 and 99')
                )
            ));
            $inputFilter->add(array(
                'name' => 'noughtToSixty',
                //Add the following validator
                'validators' => array(
                    array('Float',
                        'name' => 'Between',
                        'options' => array(
                            //Ensure a minimum character value of 1
                            'min' => 1,
                            //Ensure a maximum character value of 99999
                            'max' => 99999,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 99999')
                        )
                    )
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'topSpeed',
                //Add the following filters
                'filters' => array(
                    //Ensure the topSpeed value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 9999
                    'max' => 9999,
                     //Add the following message if the value is not in between
                     'messages' => array('notBetween' => 'Value must be between 1 and 9999')
                )
            ));
            $inputFilter->add(array(
                'name' => 'enginePowerBHP',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "enginePowerBHP" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 30
                            'max' => 30,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 30')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'drivetrain', 
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "drivetrain" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 30
                            'max' => 30,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 30')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'economyUrban', 
                //Add the following validator
                'validators' => array(
                    array('Float',
                        'name' => 'Between',
                        'options' => array(
                            //Ensure a minimum character value of 1
                            'min' => 1,
                            //Ensure a maximum character value of 9999
                            'max' => 9999,
                            //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 9999')
                        )
                    )
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'economyExtraUrban', 
                //Add the following validator
                'validators' => array( 
                    array('Float',
                        'name' => 'Between',
                        'options' => array(
                            //Ensure a minimum character value of 1
                            'min' => 1,
                            //Ensure a maximum character value of 9999
                            'max' => 9999,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 9999')
                        )
                    )
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'economyCombined', 
                //Add the following validator
                'validators' => array(
                    array('Float',
                        'name' => 'Between',
                        'options' => array(
                            //Ensure a minimum character value of 1
                            'min' => 1,
                            //Ensure a maximum character value of 9999
                            'max' => 9999,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 9999')
                        )
                    )
                ),
                //Add the following filters
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                )
            ));
            $inputFilter->add(array(
                'name' => 'emissions',
                //Add the following filter
                'filters' => array(
                    //Ensure the topSpeed value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Strip the name of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 9999
                    'max' => 9999,
                     //Add the following message if the value is not in between
                     'messages' => array('notBetween' => 'Value must be between 1 and 999')
                )
            ));
            $inputFilter->add(array(
                'name' => 'annualTax',
                //Add the following filter
                'filters' => array(
                    //Ensure the topSpeed value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 9999999
                    'max' => 9999999,
                    //Add the following message if the value is not in between
                    'messages' => array('notBetween' => 'Value must be between 1 and 9999999')
                )
            ));
            $inputFilter->add(array(
                'name' => 'mileage',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "mileage" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 30
                            'max' => 30,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 30')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'bodyType', 
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "bodyType" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 50
                            'max' => 50,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 50')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'noOfDoors',
                //Add the following filter
                'filters' => array(
                    //Ensure the noOfDoors value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 9
                    'max' => 9,
                     //Add the following message if the value is not in between
                     'messages' => array('notBetween' => 'Value must be between 1 and 9')
                )
            ));
            $inputFilter->add(array(
                'name' => 'noOfSeats',
                //Ensure the field is re
                //Add the following filter
                'filters' => array(
                    //Ensure the noOfSeats value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 9
                    'max' => 9,
                     //Add the following message if the value is not in between
                    'messages' => array('notBetween' => 'Value must be between 1 and 9')
                )
            ));
            $inputFilter->add(array(
                'name' => 'transmission',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "transmission" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 25
                            'max' => 25,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 25')
                        ),
                    ),
                    array(
                        'name' => 'NotEmpty',
                        //'break_chain_on_failure' => true,
                        'options' => array(
                             //Add the following message if the value empty
                            'messages' => array('isEmpty' => 'Drop Down Input "Transmission" Is Empty. Please Select An Option')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'fuelType',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "fuelType" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 25
                            'max' => 25,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 25')
                        ),
                    ),
                    array(
                        'name' => 'NotEmpty',
                        //'break_chain_on_failure' => true,
                        'options' => array(
                            'messages' => array('isEmpty' => 'Drop Down Input "Fuel Type" Is Empty. Please Select An Option')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'colour',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "colour" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 50
                            'max' => 50,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 50')
                        ),
                    ),
                ),
            ));
            $inputFilter->add(array(
                'name' => 'price',
                //Add the following filter
                'filters' => array(
                    //Ensure the price value is always an integer
                    array('name' => 'Int'),
                    //Have the name stripped of HTML and PHP tags
                    array('name' => 'StripTags'),
                    //Have the name be stripped of all whitespace
                    array('name' => 'StringTrim')
                ),
                'options' => array(
                    'name' => 'Between',
                    'encoding' => 'UTF-8',
                    //Ensure a minimum character value of 1
                    'min' => 1,
                    //Ensure a maximum character value of 999999
                    'max' => 999999,
                     //Add the following message if the value is not in between
                    'messages' => array('notBetween' => 'Value must be between 1 and 999999')
                )
            ));

            $inputFilter->add(array(
                'name' => 'details',
                //Add the following filter
                'filters' => array(
                    //Have the name stripped of HTML and PHP tags, and trim the value of whitespace
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                //Add the following validator
                'validators' => array(
                    array(
                        //Operate on the length of the "details" value
                        'name' => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            //Ensure a minimum character length of 1
                            'min' => 1,
                            //Ensure a maximum character length of 100
                            'max' => 3000,
                             //Add the following message if the value is not in between
                            'messages' => array('notBetween' => 'Value must be between 1 and 3000')
                        ),
                    ),
                ),
            )); 
            //Set the value of this instance's input filter as the one we had just created
            $this->inputFilter = $inputFilter;
        }
        //Return this instance's input filter
        return $this->inputFilter;
    }

    public function getArrayCopy() {
        //Return a copy of this instance
        return get_object_vars($this);
    }

}

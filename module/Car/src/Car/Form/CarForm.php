<?php
namespace Car\Form;

use Zend\Form\Form;

 class CarForm extends Form
 {
     public function __construct($name = null) {
         // we want to ignore the name passed
         parent::__construct('car');
         //Set the enc type of this form as multipart/form-data, to allow files/images to be attached too
         $this->setAttribute('enctype', 'multipart/form-data');
         //Set the method of this form to "POST", meaning all values will be posted
         $this->setAttribute('method', 'POST');
         //Add the following to this form
         $this->add(array(
             'name' => 'id',
             //Give this field a type of "Hidden", meaning it will not be shown
             'type' => 'Hidden'
         )); 
         //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPicture"
            'name' => 'carPicture', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => 'Main Car Image',
            )
         )); 
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic2"
            'name' => 'carPic2', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-2',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '2nd Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic3"
            'name' => 'carPic3', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-3',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '3rd Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic4"
            'name' => 'carPic4', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-4',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '4th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic5"
            'name' => 'carPic5',
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-5',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '5th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic6"
            'name' => 'carPic6', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-6',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '6th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic7"
            'name' => 'carPic7',
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-7',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '7th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic8"
            'name' => 'carPic8',
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-8',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '8th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic9"
            'name' => 'carPic9', 
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-9',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '9th Car Picture',
            )
         ));
        //Add the following input field to this form
        $this->add(array(
            //Give this field a name of "carPic10"
            'name' => 'carPic10',
            //Give this field the following attributes
            'attributes' => array(
                //Give this field a unique id value
                'id' => 'car-picture-input-10',
                //Set the type of this field as "file", ensuring that clicking this will allow...
                //...the user to upload a file
                'type'  => 'file',
                //Set the required as the default(true), ensuring the value cannot be empty
                //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required',
            ),
            'options' => array(
                //Set the text label of this input field
                'label' => '10th Car Picture',
            )
         ));
        //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "make"
             'name' => 'make',
             //Give this field a value of "Select", turning it into a drop-down menu
             'type' => 'Zend\Form\Element\Select',
             //Give this field the following options
             'options' => array(
                 //Disable the in-array validator
                 'disable_inarray_validator' => true,
                 //Set the text label as "Make"
                 'label' => 'Make',
                 //Have the menu's empty/not_selected option as "Please Select"
                 'empty_option' => 'Please Select',
                 //Populate the menu with this long list of options, left being the real value...
                 //...and right being the text value
                 'value_options' => array(
                     'AC' => 'AC',
                     'Alpha Romeo' => 'Alpha Romeo',
                     'Aston Martin' => 'Aston Martin',
                     'Audi' => 'Audi',
                     'Bentley' => 'Bentley',
                     'BMW' => 'BMW',
                     'Caterham' => 'Caterham',
                     'Chrysler-Jeep' => 'Chrysler-Jeep',
                     'Citroen' => 'Citroen',
                     'Daewoo' => 'Daewoo',
                     'Daihatsu' => 'Daihatsu',
                     'Ferrari' => 'Ferrari',
                     'Fiat' => 'Fiat',
                     'Ford' => 'Ford',
                     'Honda' => 'Honda',
                     'Hyundai' => 'Hyundai',
                     'Isuzu' => 'Isuzu',
                     'Jaguar' => 'Jaguar',
                     'Jeep' => 'Jeep',
                     'Kia' => 'Kia',
                     'Lamborghini' => 'Lamborghini',
                     'Land Rover' => 'Land Rover',
                     'Lexus' => 'Lexus',
                     'Maserati' => 'Maserati',
                     'Mazda' => 'Mazda',
                     'Mercedes-Benz' => 'Mercedes-Benz',
                     'MG' => 'MG',
                     'Mitsubishi' => 'Mitsubishi',
                     'Morgan' => 'Morgan',
                     'Nissan' => 'Nissan',
                     'Perodua' => 'Perodua',
                     'Peugeot' => 'Peugeot',
                     'Porsche' => 'Porsche',
                     'Proton' => 'Proton',
                     'Renault' => 'Renault',
                     'Rolls-Royce' => 'Rolls-Royce',
                     'Rover' => 'Rover',
                     'Saab' => 'Saab',
                     'SEAT' => 'SEAT',
                     'Skoda' => 'Skoda',
                     'Smart' => 'Smart',
                     'Subaru' => 'Subaru',
                     'Suzuki' => 'Suzuki',
                     'Tesla' => 'Tesla',
                     'Toyota' => 'Toyota',
                     'TVR' => 'TVR',
                     'Vauxhall' => 'Vauxhall',
                     'Volvo' => 'Volvo',
                     'Volkswagen' => 'Volkswagen',
                     'Other' => 'Other' 
                 )
             ),
             //Give this field the following attributes
             'attributes' => array(
                 //Set the personal id as "make-input"
                 'id' => 'make-input',
                 //Set the class as "form-control", in which the css/scss files will modify it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                 //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "model"
             'name' => 'model',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Model'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'model-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                 //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "modelYear"
             'name' => 'modelYear',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Model Year',
                 //Set the required as the default(true), ensuring the value cannot be empty
                 //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'model-year-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                 //If left empty on submission, insead of refreshing, the user will be scrolled upwards...
                //...to it, and will also have a red outline
                'required' => 'required'
             )
         )); 
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "engineSize"
             'name' => 'engineSize',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Engine Size'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'engine-size-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "brochureSize"
             'name' => 'brochureSize',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Brochure Size'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'brochure-size-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "topSpeed"
             'name' => 'topSpeed',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 'label' => 'Top Speed'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'top-speed-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "noughtToSixty"
             'name' => 'noughtToSixty',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Nought To Sixty'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'nought-to-sixty-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "enginePowerBHP"
             'name' => 'enginePowerBHP',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'BHP Power'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'engine-power-bhp-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "drivetrain"
             'name' => 'drivetrain',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Drivetrain'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'drivetrain-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "economyUrban"
             'name' => 'economyUrban',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Economy(Urban)'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'economy-urban-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "economyExtraUrban"
             'name' => 'economyExtraUrban',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Economy(Extra Urban)'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'economy-extra-urban-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "economyCombined"
             'name' => 'economyCombined',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Economy(Combined)'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'economy-combined-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "emissions"
             'name' => 'emissions',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'CO2 Emissions'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'emissions-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "annualTax"
             'name' => 'annualTax',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Annual Tax'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'annual-tax-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "mileage"
             'name' => 'mileage',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Mileage'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'mileage-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "bodyType"
             'name' => 'bodyType',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Body Type'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'body-type-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "noOfDoors"
             'name' => 'noOfDoors',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Doors'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'no-of-doors-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "noOfSeats"
             'name' => 'noOfSeats',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Seats'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'no-of-seats-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "transmission"
             'name' => 'transmission',
             //Give this element a type of Select, turning it into a drop-down menu
             'type' => 'Zend\Form\Element\Select',
             'options' => array(
                 'disable_inarray_validator' => true,
                 //Set the text label of this input field
                 'label' => 'Transmission',
                 //Set the empty/not selected value as a text of "Please Select"
                 'empty_option' => 'Please Select',
                 //Populate this menu with the following options, left being the actual value...
                 //..and right being the text value
                 'value_options' => array(
                     'Manual' => 'Manual',
                     'Automatic' => 'Automatic',
                     'Other' => 'Other'
                  )
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'transmission-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "fuelType"
             'name' => 'fuelType',
             //Give this field a type of Select, turning it into a drop-down menu
             'type' => 'Zend\Form\Element\Select',
             'options' => array(
                 'disable_inarray_validator' => true,
                 //Set the text label of this input field
                 'label' => 'Fuel Type',
                 //Set the empty/not_selectied option as a text value of "Please Select" 
                 'empty_option' => 'Please Select',
                 //Populate the menu with the following options, the left side being the actual value...
                 //...and the right value being the text value
                 'value_options' => array(
                     'Petrol' => 'Petrol',
                     'Diesel' => 'Diesel',
                     'Other' => 'Other'
                  )
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'fuel-type-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "colour"
             'name' => 'colour',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Colour'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'colour-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
         $this->add(array(
             //Give this field a name of "price"
             'name' => 'price',
             //Give this field a value of "Text", turning it into a text box
             'type' => 'Text',
             'options' => array(
                 //Set the text label of this input field
                 'label' => 'Price'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'price-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
         //Add the following input field to this form
          $this->add(array(
              //Set the name of this field as "details"
             'name' => 'details',
              //Set the type of this field as textarea, turning it into a textarea input
             'type' => 'textarea',
             'options' => array(
                 //Set the text label of this field
                 'label' => 'Additional Details'
             ),
             'attributes' => array(
                 //Give this field a unique id value
                 'id' => 'details-input',
                 //Attach the "form-control" custom class to this field, in which css/scss will change it's appearance
                 'class' => 'form-control',
                 //Increase the height of this textarea by setting the number of rows to 10
                 'rows' => '10',
                 //Set the required as the default(true), ensuring the value cannot be empty
                'required' => 'required'
             )
         ));
          //Add the following to this form
         $this->add(array(
             //Give this field a name of "submit"
             'name' => 'submit',
             //Set the type of this field as "Submit", turning it into a submit button
             'type' => 'Submit',
             //Set the following attributes of this button
             'attributes' => array(
                 //Set the text value of this button as "Submit"
                 'value' => 'Submit',
                 //Set the personal id as "submitButton"
                 'id' => 'submitbutton',
                 //Attach the following classes to this button
                 'class' => 'btn btn-primary btn-lg btn-block hidden-print'
             )
         ));
     }
 }
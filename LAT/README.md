
# Landini Andmin Template for AppGini with AdminLTE 3 and bootstrap 4

## Release R2.0.0


![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/Template001.PNG)

## Important note

Remember that: for the plugin to work, you must have previously purchased an original AppGini plugin.

## Install

    1 Download it from [Here](https://github.com/myappgini/LandiniAdminTemplate).
    2 Unzip it into your root project.
    3 Enable it from admin area plugins.
    4 Enjoy it!

## how to use

After completing the compilation of your project, log in as administrator and go to the administrator area. The "Plugins" menu should appear with the "Landini Admin Template" option.
![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/plugin000.PNG)
Like the rest of the plugins select the project and then move on.
![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/plugin001.PNG)
You will be shown a list of the groups that you have configured in your system.
![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/plugin002.PNG)
In this same screen you can edit all the environment variables and you can choose the icons you want to display in the left menu.

Save and continue.

Select the folder where your project is located and continue.
![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/plugin003.PNG)
The system will make the necessary changes for its operation.
The change log will show you which files were copied and which files were updated.
![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/plugin004.PNG)
Once finished, you can return to the home page and the temple should already work.
It is not necessary to return to the plugin to update the variables, since each time you return the variables it will be rewritten with the default values. Yes it is necessary to reinstall the plugin if a new compilation of your project was necessary.
The variables can be updated, by the admin user, from the right control panel. Look for the App Enviroment button.

Enjoy the template and stay tuned for your comments.

You can conmute to default appgini only changue true to false in config_lat.php the varible ```$LTE_enable```

```php

function  getLteStatus($LTE_enable = true){

    if(!function_exists('getMemberInfo')){

        $LTE_enable = false;

    }

    return  $LTE_enable;

}

```

## Changes

- Update to AdminLTE 3.0.4

- Edit enviroment variables from right side control

- myCustom.css

- modification of the background image and add exmples images

```css

.content-wrapper {

    min-height: 100%;

    background-color: #ecf0f5;

    background: url(background/slide_2.jpg);

    background-repeat: no-repeat;

    background-attachment: fixed;

    background-size: cover;

    z-index: 800;

}

```

- hide fields directly id

```css

label[for='id']{

    display: none;

}

  

label[for='id'] + div {

    display: none;

}

```

## New Features

- New Mebership Profile

Add time line feature

![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/Template003.PNG)

- Extend template to Admin Area

![Home Page](https://raw.githubusercontent.com/myappgini/LandiniAdminTemplate/master/LAT/screenshots/Template011.PNG)

- Bootstrap 4 support

- hidden group

If the hidden group is created, the tables that are within this group will only be visible to the admin user group.

## Resources
  
- <https://adminlte.io/themes/AdminLAT/documentation/index.html#introduction>

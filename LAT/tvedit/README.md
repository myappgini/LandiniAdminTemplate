
# Field editor in table view

Submodulo para Landini Admin Template for AppGini

Application that will allow you, in the tables view, to quickly edit the fields.

Updating this information via ajax.

On the server side it has all the security that appgini offers with respect to the user, executing the hooks before updating and after updating, it also records the user's update.

## Install

Install via git submodule

    $ git submodule add git@github.com:myappgini/sbm_tvedit.git tvedit
    $ git submodule add git@github.com:myappgini/sbm_plugins.git plugins


## Setup

First of all you have to register the js libraries for them to run.
Find and edit the `header-extras.php` file inside the hooks folder.
Add the following two command lines:
  
    <script  src = "<?php echo PREPEND_PATH;?>PATH_TO/plugins/jquery-jeditable/jquery.jeditable.js"></script>
    <script  src = "<?php echo PREPEND_PATH;?>PATH_TO/tvedit/tv.edit.js"></script>

To be activated within the table view you need you must write within the table tablename-tv.js (you must create a new one if it is not found) the following command lines:

    $j(function () {
        tv_editlets (AppGini.currentTableName (),['Table_name_A','Table_Name_B']);
    });

Just comment on the previous line so that the application is deactivated.

> An array is added to prevent the fields from being editable. The array is optional if nothing is placed, it enables all editable fields.

> The callback function is enabled by calling the ``tv_callback (result, settings, submitdata){}`` function. With this callback function, you can achieve, once the modification has been made in the table, also update other data in the table.

    function tv_callback(result, settings, submitdata){
        $j.get('hooks/myfunction-ajax.php',{id:submitdata.id})
            .done(function(data){
                $j('#tablename-fieldanme-'+submitdata.id + ' > a').text(data.field);
        });
    }

Soon I will try to make it work with a plugin, to avoid having to write some code.

This application is generated with appgini's own code and will be released by jquery_jeditable

which is free to use.

The same can be found here:

https://github.com/NicolasCARPi/jquery_jeditable/

## Updates
08/08/20

- It adds the possibility of deactivating the fields in the table that you do not want to edit online.
- Update jeditable library.
- Changue de folder control name LTE to LAT
- the callback function is enabled by calling the ``tv_callback (result, settings, submitdata)`` function
- can edit empty field

## Screenshot

![https://github.com/myappgini/tvedit/blob/master/screenshots/tvedit.png](https://github.com/myappgini/tvedit/blob/master/screenshots/tvedit.png?raw=true)
![https://github.com/myappgini/tvedit/blob/master/screenshots/tvedit_diable_customer_field.png](https://github.com/myappgini/tvedit/blob/master/screenshots/tvedit_diable_customer_field.png?raw=true)

The work is provided “as is”. You may not hold the author liable.

Please, if you think there is an error, do not stop commenting, as well as if you liked it. Also if they have any suggestions

Thanks a lot!

I hope you enjoy it

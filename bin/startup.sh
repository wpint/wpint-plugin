#!/bin/bash

do_operation(){

    parent_dir="./"
    user_group=$(stat -c "%U:%G" "$parent_dir")

    cp -v ".env.example" ".env"

    if [ ! -d 'storage/plugin/views/' ]
    then 
        mkdir -p 'storage/plugin/views/'
    fi

    chown "$user_group" .env
    chown -R "$user_group" storage 
} 

if [ -e ".env" ]
then 
    echo '.env file already exists.'
else 
    echo '.env file doesn`t exist, make sure you are running the startup.sh script in the root of your plugin directory';

    echo "Are you in the root of wpint directory?"
    select yn in YES NO; do 
        case $yn in
            YES)
                do_operation
                break;;
            NO)
                echo "directory is not valid"
                break;;
            *) 
            echo "Invalid option";;
        esac
    done
fi



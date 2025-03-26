#!/bin/bash
ddir="/tmp/"

inotifywait -m /tmp -q -e close_write -e moved_to |
    # inotifywait inotifywait -m -q -e create -e moved_to --format %f /tmp |
    while read -r directory action file; do
        if [[ "$file" =~ .*csv$ ]]; then # Does the file end with .xml?
            
            echo "$file file" # If so, do your thing here!
            mv $ddir$file /var/www/bin
            echo "Success tmoved $ddir$file"

        fi
    done

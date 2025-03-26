#!/bin/bash
sourcefile=$1
destination=$2
if [ -f  $sourcefile ]; then
   
    sudo -- sh -c "sudo mv $sourcefile  $destination"

fi

#!/bin/bash

# Set mysqldump SQL file path manually if  not in path
PSQL=$(which mysql)

PWD=$(pwd)

if [ $? -eq 0 ]; then
    echo "Using mysql: ${PSQL}"
else
    echo "mysql client not found. set path manually"
    exit -1
fi

# cp ./exporttoexcel.sql /tmp/exporttoexcel.sql
# pushd /

mysql_user="root"
mysql_pwd="Oluwaseun1@"
mysql_db_name="lawp"
mysql_path="/tmp/"
destination_folder="${PWD}"
var=0

# echo "${destination_folder}"

# If the folder doesn't exist then create one.
if [ ! -d $destination_folder ]; then
    sudo -- sh -c "mkdir $destination_folder"
fi

# Get all the tables of the DB and then export each column to respective csv.
# for column in $(mysql -u$mysql_user -p$mysql_pwd $mysql_db_name -Bse "show tables;"); do
#     FILENANEM=$((1 + $RANDOM % 10000))
#     # echo $column
#     # echo $var
#     echo $column$FILENANEM

#     sudo -- sh -c "mysql -u$mysql_user -p$mysql_pwd $mysql_db_name -Bse \"SELECT * FROM $column INTO OUTFILE  '$mysql_path$column$FILENANEM.csv' CHARACTER SET utf8mb4  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\\\"' LINES TERMINATED BY '\n\t'\";"
#     fileeee=$mysql_path$column$FILENANEM.csv
#     # until [ -e $fileeee ]; do
#     #     sleep 1
#     # done
#     sudo -- sh -c "sudo mv $mysql_path$column$FILENANEM.csv $destination_folder"

# done

# rm -f $fileee

# cp ./exporttoexcel.sql /tmp/exporttoexcel.sql
# pushd /

# ${PSQL} -u root -pOluwaseun1@ lawp </tmp/exporttoexcel.sql

FILENANEM=$((1 + $RANDOM % 10000))
column="consolidated_orders"
mysql -u$mysql_user -p$mysql_pwd $mysql_db_name -e "SELECT *  FROM $column INTO OUTFILE '$mysql_path$column$FILENANEM.csv' CHARACTER SET utf8mb4 FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'  LINES TERMINATED BY '\n\t' ;"
fileee=$mysql_path$column$FILENANEM.csv
# until [ -s $fileee ]; do
#     sleep 1
# done
# echo File exists
# sleep 3

if [ -f $mysql_path$column$FILENANEM.csv ]; then
    echo "File exist"
    sudo -- sh -c "sudo mv $mysql_path$column$FILENANEM.csv $destination_folder"

fi

# sh ./movefile.sh $fileee $destination_folder

# [ -e sleep.txt ] || while IFS= read -r fname
# do_
#     [ "$fname" = sleep.txt ] && break
# done < <(inotifywait -m -q -e create -e moved_to --format %f .)

# inotifywait -m /tmp -q -e create -e moved_to |
# # inotifywait inotifywait -m -q -e create -e moved_to --format %f /tmp |
#     while read -r directory action file; do
#         if [[ "$file" =~ .*csv$ ]]; then # Does the file end with .xml?
#             # echo "xml file"              # If so, do your thing here!
#
#         fi
#     done

# # # sudo -- sh -c "mysql -u$mysql_user -p$mysql_pwd $mysql_db_name -Bse \"SELECT * FROM $column INTO OUTFILE  '$mysql_path$column$FILENANEM.csv' CHARACTER SET utf8mb4  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\\\"' LINES TERMINATED BY '\n\t'\";"
# mv "/tmp/consolidated_orders.csv" $destination_folder
# mv $mysql_path$column$FILENANEM.csv $destination_folder
# postgres -c "${PSQL} -U postgres -d postgres -f /tmp/create-schema.sql"
# ${PSQL} -u root -pOluwaseun1@ lawp "mysql -u$mysql_user -p$mysql_pwd $mysql_db_name -Bse \"SELECT * FROM $column INTO OUTFILE  '$mysql_path$column.csv' FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\\\"' LINES TERMINATED BY '\n'\";"
# if [ $? -eq 0 ]; then
#     echo "script  schema succeeeded"
# else
#     echo "Script schema failed"
# fi

# rm -f /tmp/exporttoexcel.sql
# popd

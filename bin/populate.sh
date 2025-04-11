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

cp ./populate.sql /tmp/populate.sql
pushd /

# postgres -c "${PSQL} -U postgres -d postgres -f /tmp/create-schema.sql"
${PSQL} -u root -pOluwaseun1@ lawp </tmp/populate.sql
if [ $? -eq 0 ]; then
    echo "script  schema succeeeded"
else
    echo "insert schema failed"
fi

rm -f /tmp/populate.sql
popd

sudo chown -R www-data:www-data /var/www/bin

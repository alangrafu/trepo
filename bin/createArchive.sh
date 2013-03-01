#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

cd  $DIR/../upload
TOTAL=`ls *.zip|wc -l`
tar cvf $DIR/../_archive.tar *.zip CONTRIBUTORS LICENSE README
mv $DIR/../_archive.tar $DIR/../archive.tar 
echo "Currently, $TOTAL people have donated their tweets" > $DIR/../currentNumber.txt 

#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

cd  $DIR/../upload
tar cvf $DIR/../_archive.tar *.zip
mv $DIR/../_archive.tar $DIR/../archive.tar 

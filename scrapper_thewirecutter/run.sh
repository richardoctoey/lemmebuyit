#!/usr/bin/sh
# $1 = url
# $2 = total page
START=1
END=$2
for i in $(eval echo "{$START..$END}")
do
    echo "phantomjs brain.js $1 $i"
	$(eval echo "phantomjs brain.js $1 $i")
done
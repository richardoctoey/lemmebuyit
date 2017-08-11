#!/usr/bin/sh
# $1 = url
# $2 = total page
START=1
END=$2
for i in $(eval echo "{$START..$END}")
do
    echo "phantomjs brain.js https://www.thisiswhyimbroke.com/api/lists/new/ $i"
	$(eval echo "phantomjs brain.js https://www.thisiswhyimbroke.com/api/lists/new/ $i")
done
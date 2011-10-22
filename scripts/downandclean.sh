#downloader and cleaner version 0.1 -> edwin@aethernet.eu
#!/bin/sh
rm /home/sortiraliege/public_html/ics/pipesDirty.ics
wget "http://pipes.yahoo.com/pipes/pipe.run?_id=e631110c227705117182f37ca5982efe&_render=ical" -O /home/sortiraliege/public_html/ics/pipesDirty.ics
sed 's/\&amp\\;/\&/g' /home/sortiraliege/public_html/ics/pipesDirty.ics | sed '2,3d' | sed "2 i VERSION:2.0" | sed "3 i PRODID:SORTIRALIEGE" > /home/sortiraliege/public_html/ics/gcal.ics
grep -c "BEGIN:VEVENT" public_html/ics/pipes.ics > /home/sortiraliege/public_html/count.inc.html

# Emsh
- A primitive search engine to search the mesh ( internet)

## Steps
<pre>
cd crawler
php parser.php > urllist.txt
mkdir documents
cat urllist.txt | xargs -L1 -P32 php crawler.php
cd ..
mkdir documents index
php add.php
</pre>

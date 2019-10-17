# Emsh
- A primitive search engine to search the mesh ( internet)

## Bangs
![Bangs](/img/ssBangs.jpeg)

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

# References
- Sergey Brin and Lawrence Page, [The Anatomy of a Large-Scale Hypertextual Web Search Engine](http://infolab.stanford.edu/~backrub/google.html)
- Wikipedia, [Web search engine](https://en.wikipedia.org/wiki/Web_search_engine)
- [Ben E. C. Boyter's Blog](https://boyter.org/2013/01/code-for-a-search-engine-in-php-part-1/)
- [Why Writing Your Own Search Engine is Hard](https://queue.acm.org/detail.cfm?id=988407)
- [Searx](https://asciimoo.github.io/searx/)

Suggestions / Corrections
=========================

Suggestions
===========

1. Ajax get function: Better to call get function once the document is ready

2. getinfo/111: Better Id would send through the data parameters in get function

3. $.get: $.getJSON Would be better than $.get

4. Id would use as md5 character rather than using Integer to prevent from web crawling

5. Better create static mysql connection, it'll prevent to open to each request

6. Caching Technology like memcached, xcache to improve performance and to reduce the load of the database server

7. Object database can be used to store light weight data like id and md5 to improve performance.

8. Better to write prepared statement on mysql query to prevent sql injection

Corrections
===========

1. $data = new dataObj() should be $data = new propertyData()

2. if(is_object($data) = true) should be if(is_object($data) == true)

3. There is no failture $status value or default $status value

4. $table on query should be $this->table

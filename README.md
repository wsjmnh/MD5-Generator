MD5-Generator
=============

You can generate all possiable words to md5 and save to databse, using Ascii table from 32 to 126.

It is recommended to use php command line to run the code as if you run on a broswer, you will get http 500 error.

the code is functional in length of 1-6, for 7 or above you can add by yourself but the data will be too huge to be stored.


#Database
On line 3 change the database setting.

There is an empty sql table. recommended the word and md5 columns are both primary key. The reason is when you stop generating half way, you can conitue back running faster and no repeat data.


if you have enough harddisk space,probably 100TB, 1000TB?, you can have 8 or 9-length of md5 reversed data. but the code is not efficiency, will improve it in a later date.

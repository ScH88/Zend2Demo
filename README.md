This is simply a demonstration of me trying to learn Zend 2. Please note that this project is incomplete, and I could do with some help with it.

IMPORTANT NOTES:

1) Some files in the vendors directory are left empty because the contents are too large.

2) All input fields in the forms have the 'required' value set to 'true', including the image upload fields. This because it seems for some reason, if I set all the other picture upload fields (except the first one) to false, the files will still not upload unless all input fields are filled.

3) Also, related to the image upload issue above, it seems that in the foreach statement regarding each file input filled with a value, without a certain rename filter, each file uploads with a name, for example, 3234234.tmp_(actual filename).jpg. Now, with the filter applied, only one image (probably the first one) uploads (despite that, renaming is successful).

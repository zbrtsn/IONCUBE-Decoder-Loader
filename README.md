# IONCUBE-Decoder-Loader
This software tool can help you run files that have been encoded using the ionCube PHP Encoder.<br>
A PHP extension called the ionCube Loader handles the reading and execution of encoded files at run time.

------------
## Download

You can visit [this link](https://www.ioncube.com/encoder_eval_download.php "this link") to obtain the free trial version of the Ioncube Decoder. <br>
Then you need to get [Ioncube Loader](https://www.ioncube.com/loaders.php) to encode your decoded file.

------------
## Decode the Your PHP Code

- Extract these files from the .tar.gz archive.
- Go to the `ioncube_encoder_evaluation` directory.
You'll see there a bash file `ioncube_encoder.sh`
```bash
./ioncube_encoder.sh
```
Enter this code, and you will see instructions on how to proceed.
To summarize:
```bash
./ioncube_encoder.sh [your encoder version] [architecture] [your php version] [the app will encode] -o [the encoded php file]
```
in here, 
- Encoder Version (optional, you don't have to use it): <br>
-C : Use Current Encoder (v13.0) - Default <br>
-L : Use Legacy Encoder (v12.0) <br>
-O : Use Obsolete Encoder (v11.0) <br>

- PHP Languages: <br>
-4 : Encode file as PHP 4 <br>
-5 : Encode file as PHP 5 <br>
-53 : Encode file as PHP 5.3 <br>
-54 : Encode file as PHP 5.4 <br>
-55 : Encode file as PHP 5.5 <br>
-56 : Encode file as PHP 5.6 <br>
-71 : Encode file as PHP 7.1 <br>
-72 : Encode file as PHP 7.2 <br>
-74 : Encode file as PHP 7.4 <br>
-81 : Encode file as PHP 8.1 <br>
-82 : Encode file as PHP 8.2

- Architecture (optional): <br>
-x86 | -x86-64 : Run either the 32-bit or 64-bit Encoder

- Usage examples:

Let's say you're in the directory where the decoder is located.
Encode source_file.php using the Current 64-bit Encoder for PHP 8.2:
```bash
./ioncube_encoder.sh -C -x86-64 -82 source_file.php -o target_file.php
```
In the target_file.php section, you can specify the name of the file to be decoded and where it will be saved. <br>
Like; /var/www/html/decoded-php-app.php

If I were to do it based on adding a PHP file to my repo, it would look like this:
```bash
./ioncube_encoder.sh -C -x86-64 -81 /var/www/html/form.php -o /var/www/html/decodedform.php
```
I will also put that decoded code in my repo. I want you to see that encoded file. <br>
**I used 8.1 PHP version cause in 8.2 version, ioncube loader didn't work for me.** <br>
**I tried it with version 7.4, and it worked. It might also work with minor versions below 8.2.** <br>

------------
## Encode Your Code When You Run it

- When you extract your loader folder, you'll see a lot of version of it like; <br>
`ioncube_loader_lin_8.3.so` <br>
`ioncube_loader_lin_8.2.so` <br>

actually it is so easy to apply it:
-  edit **/etc/php.ini** <br>
Edit the file located at `/etc/php.ini` using nano or vim.
- at the top of the php.ini file add: <br>
zend_extension = /path/your/ioncubeLoader/ioncube/ioncube_loader_lin_8.1.so
for instance:
```
[PHP]
zend_extension = /path/your/ioncubeLoader/ioncube/ioncube_loader_lin_8.1.so
...
```
- restart the PHP environment (i.e. Apache, php-fpm, etc.)
I use apache so;
```bash
sudo systemctl restart httpd
sudo systemctl restart php-fpm
```
- Check a phpinfo page and the Loader should show up in the Zend Engine box.
```PHP
<?php
phpinfo();
?>
```
That's all. <br>
All you need to do now just go to your web server with your encoded php file and see it's the same as was before.

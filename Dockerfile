FROM wordpress:php7.1-apache
ADD ./testtheme/ /usr/src/wordpress/wp-content/themes/testtheme/

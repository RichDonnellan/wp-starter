#!/bin/bash -
#title           :post-install.sh
#description     :This script will remove the vendor folder and activate plugins using wp-cli.
#author		       :aac
#usage		       :bash post-install.sh
#notes           :Install composer and wp-cli for this to work.
#==============================================================================
./vendor/wp-cli/wp-cli/bin/wp plugin activate --all
rm -rf vendor

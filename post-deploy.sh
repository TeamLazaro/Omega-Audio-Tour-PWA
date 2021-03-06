
# # # # #
#
#	:-: DESCRIPTION
#	This script sets up links to the folders that are managed by non-dev folk,
#		within this project directory
#
#	:-: HOW IT WORKS
# 		This script is invoked by the deployment interface,
#			after the code repository is fetched.
#
# # # # #

#! /bin/bash


while getopts "p:" opt; do
	case ${opt} in
		p )
			PROJECT_DIR=${OPTARG}
			;;
	esac
done

# Establish symbolic links to the following directories
# the media folder
rm media
ln -s ../media/${PROJECT_DIR} media
# the data folder
rm data
ln -s ../data/${PROJECT_DIR} data
# the favicon folder
rm favicon
ln -s ../media/${PROJECT_DIR}/favicon favicon

# Prepend the cache manifest to the service worker
cat data/cache-manifest.js service-worker.js > _service-worker.js
mv _service-worker.js service-worker.js

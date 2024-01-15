# Meshtastic-webflash

Interim PHP code for meshtastic web flasher

**NOTE: This has been superseeded by https://github.com/meshtastic/web-flasher**

- clone this into a directory on a linux host, e.g. `/opt/flasher` - it's advised to use `git clone --recurse-submodules`
- run composer install
- run `git submodule update --init` if you haven't cloned the submodule already
- change to the `proto` subdir and run `regen.proto.sh` (only if the protobuf submodule has been updated)
- point the root of a PHP enabled webserver to the `web` subdir.

The web server needs to have write permission in this dir and access to an 'unzip' binary because it downloads and
unpacks the firmware files for serving to the client.

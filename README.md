# Calibre & COPS for Docker

This is my first stab at a Docker container for Calibre libraries. This image will automatically check for new books every minute and add them to the Calibre library. It will also serve the calibre library using [COPS](http://blog.slucas.fr/en/oss/calibre-opds-php-server).

## Basic Usage

The data directory you pass to the container should contain 2 directories: `library` and `addbooks`. `library` should contain your calibre library. Books will be picked up and auto-added from the `addbooks` directory. To run this container:

`docker run -d -p XXXX:8080 -v /path/to/data:/data --name calibre-cops benjaminkitt/calibre-cops`

Where `XXXX` is the port you want to serve COPS to and `/path/to/data` is the path to your data folder containing the folders mentioned above.

## To-do

- [ ] Tidy things up & reduce image size if possible
- [ ] Better documentation
- [ ] Customization of volume(s)
- [ ] Customization of cron frequency
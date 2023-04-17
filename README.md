# wp-avatar-filter

The wp-avatar-filter plugin for WordPress provides a filter hook that allows you to replace user avatars with custom images based on username. It searches the gallery for username.jpg and replaces the avatar with that image. Note that your WordPress site must have the media upload setting not set to date upload for this to work.

## Installation

## Download the wp-avatar-filter plugin.
- edit the example.com URL inside the php code with your URL
- Upload the zip file directly from the WordPress admin interface.
- Activate the wp-avatar-filter plugin
- Make sure in Wordpress Settings - Media you have checked OFF the option to organize uploads by date.

## Usage

Once the plugin is installed and activated, the get_avatar_data filter hook will be applied to WordPress, and the user avatars will be replaced with the corresponding username.jpg file from the media gallery.

## Notes

It took me a little while to figure out how to use the get_avatar_data filter hook, as the WordPress API documentation can be vague at times. 

So big thanks to Adi Kusuma for the help!
https://stackoverflow.com/users/10203981/adi-kusuma 

Once you get it working, it's a powerful tool to automate bulk user creation in Wordpress. Tested on a Wordpress installation with over 200 users. It works dynamically, so you can replace images just by deleting the old one, and uploading a new one with the title of your username like username.jpg

## License

This plugin is licensed under the GPL 2.0 or later.

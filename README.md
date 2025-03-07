# wp-avatar-filter

## Overview
The `wp-avatar-filter` plugin for WordPress enables automatic user avatar assignment based on uploaded images. By simply uploading a file named `username.jpg`, the plugin dynamically sets it as the avatar for that user, eliminating the need for manual avatar selection.

This is particularly useful for bulk user creation, allowing administrators to quickly assign profile pictures via the WordPress media library.

## Features
- Automatically assigns user avatars by matching images to usernames (e.g., `johnsmith.jpg` for user `johnsmith`).
- No manual avatar selection required—just upload the correctly named image.
- Works dynamically: updating an avatar is as simple as deleting an old image and uploading a new one.
- Tested with over 200 users for bulk assignment.

## Installation

### Download & Setup
1. Download the `.zip` file.
2. Edit the `.php` file inside the plugin folder and replace `example.com` with your own WordPress site URL.
3. Re-compress the edited plugin folder into a `.zip` file.
4. Upload the `.zip` file via the WordPress admin panel (`Plugins` > `Add New` > `Upload Plugin`).
5. Activate the `wp-avatar-filter` plugin.
6. Ensure that in `WordPress Settings` > `Media`, the option **"Organize my uploads into month- and year-based folders"** is **unchecked** to allow direct access to uploaded images.

## Usage
1. Upload an image named after the username (e.g., `johnsmith.jpg`) to the WordPress media library.
2. The plugin automatically applies the corresponding image as the user's avatar.
3. To change an avatar, simply delete the old image and upload a new one with the same naming format.

## Notes
- This plugin uses the `get_avatar_data` filter hook to override default avatars dynamically.
- WordPress API documentation on this hook can be unclear, but thanks to **Adi Kusuma** on Stack Overflow for guidance: [Adi Kusuma's profile](https://stackoverflow.com/users/10203981/adi-kusuma).

## License
This plugin is licensed under the **GPL 2.0 or later**.

---

With this plugin, bulk user avatar assignment becomes seamless, reducing manual work and ensuring a consistent look across your WordPress user profiles.




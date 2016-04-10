# Kinart WordPress site

## Development

### Getting started

1. Clone the repository and cd to the working copy.
2. `vagrant init beet/box && vagrant up`.
3. Browse to the site iat http://kinart.local/ and run the install process.
4. Log in as admin and install the wp-cfm plugin.
5. Visit /wp-admin/options-general.php?page=wpcfm and pull changes from the global bundle.
6. Visit /wp-admin/admin.php?page=pods-component-migrate-packages, click "Import" and paste the contents of `wp-content/config/pods.json`.
7. [TODO: db sync]

### Staging changes for deployment

Changes to Wordpress config (e.g. adding or removing modules, adjusting settinggs - anything that will reside in `wp_options` table) should be exported in WP-CFM global bundle.

Changes to post types and fields should be managed through the Pods UI and exported to `wp-content/config/pods.json`.



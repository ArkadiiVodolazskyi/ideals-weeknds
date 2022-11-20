
# iDeals test task


## Get files

Requires: [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git), [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos), [Docker](https://docs.docker.com/desktop/install/linux-install/), [Docker Compose](https://docs.docker.com/compose/install/other/).

1. Clone the repo into folder:
	> $ `git clone https://github.com/ArkadiiVodolazskyi/ideals-weeknds.git <path/to/folder>`

2. Install Wordpress plugins, unzip Wordpress uploads folder, unzip database:
	> $ `composer install`

3. Download and install the enviroment to run Wordpress: Wordpress core, MySQL, phpMyAdmin:

	> $ `docker-compose up -d`

---

## Import database and login into the site

4. Open [phpMyAdmin](http://localhost:1000).

5. Log in to phpMyAdmin:

	> Username: `wordpress`

	> Password: `wordpress`

6. Import contentful database from db/wordpress.sql intro wordpress database:

	> `wordpress - Import - Browse - db/wordpress.sql - Import`.

7. Log into [site admin panel](http://localhost:1111/wp-admin/):

	> Username or Email Address: `ideals`

	> Password: `ideals`

---

## Build and watch assets

Requires: [NodeJS](https://nodejs.org/en/download/package-manager/), [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm/).

8. Install dependencies to run Node plugins:

	> $ `npm install`

9. Compile source files and put into theme folder:

	> $ `npm run build`

	or start watching assets source files to develop.

	> $ `npm run dev`

---

![](/themes/ideals/screenshot.png)
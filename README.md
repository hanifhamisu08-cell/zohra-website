# Zohra Tourism website

PHP and MariaDB website for Zohra Tourism and Hospitality Services.

## Run locally with Docker

1. Copy `.env.example` to `.env` and replace both example database passwords.
2. Run `docker compose up --build`.
3. Open `http://localhost:8080`.

The MariaDB service initializes its tables from `database/schema.sql` on the first start and stores runtime data in a named Docker volume. To rebuild from a clean local database, remove that volume with `docker compose down -v` (this deletes local form submissions).

## Environment settings

The app reads `SITE_NAME`, `SITE_URL`, `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, and `DB_PASS` from the process environment. Keep actual credentials in the hosting provider's secret manager or environment settings. Do not commit `.env` files.

## Deployment

The app needs PHP with PDO MySQL and a reachable MySQL/MariaDB database. The included `Dockerfile` makes the PHP runtime portable to container hosts. For deployment, provide the database as a managed service, configure the environment variables above, and ensure the database is reachable from the app runtime.

Firebase Hosting serves static files. The included `firebase.json` routes requests to a Cloud Run service named `zohra-web` in `europe-west1`, where this PHP container can run. Deploy the container to Cloud Run first, then deploy Firebase Hosting. Change the service name or region in `firebase.json` if yours differs.

Netlify can build PHP projects, but it does not provide a persistent PHP web server for `.php` pages. This app therefore cannot be deployed to Netlify as-is; it would need to be redesigned around Netlify Functions or hosted on a PHP container service instead.

## Database notes

`database/schema.sql` contains the table schema only. The previous export included real contact names and email addresses; those records were removed so they are not republished with the source. Existing database records are not affected by this schema file.

Contact and booking submissions are stored in the database. This project does not yet send email notifications or include an admin dashboard for viewing submissions.

## Project layout

- PHP page files and shared header/footer are at the project root.
- `Assets/` contains the logo and local photography used by the site.
- `database/schema.sql` contains the database schema.
- `Dockerfile` and `docker-compose.yml` define the portable runtime and local development stack.
- `firebase.json` connects Firebase Hosting to the Cloud Run PHP service.

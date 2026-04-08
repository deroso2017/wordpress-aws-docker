# WordPress AWS Docker

A local WordPress development environment using Docker Compose with MySQL 8.0.

## Stack

- WordPress 6.4 (Apache)
- MySQL 8.0
- Plugins: Elementor, WooCommerce, Contact Form 7, All-in-One WP Migration, and more
- Themes: Spexo, Corpiva, Newsmatic, and more

## Requirements

- [Docker](https://www.docker.com/products/docker-desktop) & Docker Compose

## Getting Started

1. Clone the repository and navigate into it:
   ```bash
   git clone <repo-url>
   cd wordpress-aws-docker
   ```

2. Copy the example env file and adjust values:
   ```bash
   cp .env.example .env
   ```

3. Start the containers:
   ```bash
   docker compose up -d
   ```

4. Open [http://localhost](http://localhost) in your browser.

## Environment Variables

Configure credentials in `.env` (never commit this file):

| Variable             | Description              |
|----------------------|--------------------------|
| `MYSQL_DATABASE`     | WordPress database name  |
| `MYSQL_USER`         | MySQL user               |
| `MYSQL_PASSWORD`     | MySQL user password      |
| `MYSQL_ROOT_PASSWORD`| MySQL root password      |

## Project Structure

```
wordpress-aws-docker/
├── docker-compose.yml   # Service definitions
├── .env                 # Local credentials (not committed)
├── db/
│   └── backup.sql       # Database backup
└── wp-content/
    ├── plugins/         # WordPress plugins
    ├── themes/          # WordPress themes
    └── uploads/         # Media uploads
```

## Database Backup & Restore

Export:
```bash
docker exec <db-container> mysqldump -u root -p wordpress > db/backup.sql
```

Import:
```bash
docker exec -i <db-container> mysql -u root -p wordpress < db/backup.sql
```

## Useful Commands

```bash
docker compose up -d       # Start in background
docker compose down        # Stop containers
docker compose logs -f     # Follow logs
docker compose ps          # Check container status
```

## Migration

WordPress backups (`.wpress`) are stored in `wp-content/ai1wm-backups/` and can be restored via the [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/) plugin.

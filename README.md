# WordPress AWS Docker

## Project Overview
This project provides a configuration to run WordPress in a Docker container on AWS. The setup leverages multiple AWS services to create a robust, scalable, and efficient environment for hosting WordPress.

## Prerequisites
- Docker installed on your local machine.
- An AWS account with IAM permissions to create the necessary services.
- AWS CLI installed and configured with your access credentials.

## Installation Steps
1. **Clone the repository**:
   ```sh
   git clone https://github.com/deroso2017/wordpress-aws-docker.git
   ```
2. **Navigate to the project directory**:
   ```sh
   cd wordpress-aws-docker
   ```
3. **Build the Docker images**:
   ```sh
   docker-compose build
   ```

## Configuration
Before starting the Docker containers, you'll need to configure several parameters in the `docker-compose.yml` file:
- Set your AWS region.
- Configure your database settings.

## Usage Instructions
To start the application, run:
```sh
docker-compose up
```
Visit `http://localhost:8000` to access your WordPress site.

## Directory Structure
```
wordpress-aws-docker/
├── docker-compose.yml
├── Dockerfile
├── src/
│   └── wordpress/
│       ├── wp-content/
│       └── wp-config.php
└── README.md
```

## Docker Services Details
- **WordPress**: The web application that users will interact with.
- **MySQL**: The database service that stores all WordPress data.
- **AWS S3**: Used for storing media files and backups.

## Troubleshooting Guide
- **Cannot connect to MySQL**: Ensure that the MySQL service is running and that configuration settings are correct.
- **Permission issues**: Check folder permissions for the `src` folder.

## Contributing Guidelines
We welcome contributions! Please follow these steps:
1. Fork the repository.
2. Create a new feature branch.
3. Commit your changes.
4. Submit a pull request.

Be sure to include a description of the changes and any relevant information for reviewers.
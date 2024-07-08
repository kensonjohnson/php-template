# Simple PHP Template

This is a simple PHP template that can be used to create a new PHP project.
It includes a docker compose file for local development and a simple PHP script that prints "Hello World!".
Fast Process Manager (FPM) is included.

## Usage

### Prerequisites

You will need [docker](https://www.docker.com/get-started/) installed on your machine.
We will be using docker compose to run the server.

### Local Development

To start the server, run the following command in the root directory of the project:

```bash
docker-compose up
```

The server will be available at `http://localhost:8000/`

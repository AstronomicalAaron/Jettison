## About Jettison [WIP]

Jettison is a web application for model rocket enthusiasts providing a forum to share ideas.

Jettison is a PHP and Vue.js web application. It is built on top of the Laravel framework.

## How to Build and Run Locally

Once you clone or download the repository make sure you're in the project root.
Then bring up the Docker containers with Sail:
```shell
./vendor/bin/sail up -d
```

Then run the migrations:
```shell
./vendor/bin/sail artisan migrate
```

Then bring up Vite to build the front end:
```shell
./vendor/bin/sail npm run dev
```

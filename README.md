# PHPUnit Sample

Runnable PHPUnit sample that generates coverage and runs Parity in CI.

## Run locally

Install Parity first. Until Parity is published to Packagist or a public PHAR release is available, install it from the source repository:

```bash
composer global config repositories.parity vcs https://github.com/testparity/cli
composer global require testparity/parity:dev-main
```

Generate or use the sample coverage artifact, then run Parity:

```bash
cd code && composer install && XDEBUG_MODE=coverage ./vendor/bin/phpunit --configuration phpunit.xml --coverage-clover=clover.xml --colors=never && cd ..
parity check --config=parity.yaml --format=json
```

## CI

The GitHub Actions workflow installs Parity during CI and then runs:

```bash
parity check --config=parity.yaml --format=json
```

Because the Parity CLI repository is currently private, configure a repository secret named `PARITY_CI_TOKEN` with read access to `testparity/cli`. This can be removed once Parity is available from a public Composer package or release artifact.

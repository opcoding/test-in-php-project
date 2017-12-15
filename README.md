[![continuousphp](https://img.shields.io/continuousphp/git-hub/continuoustest/test-in-php-project/ci/continuousphp.svg)]()

## Test in ContinuousPHP

View the configuration and builds of this project on ContinuousPHP

https://app.continuousphp.com/git-hub/continuoustest/test-in-php-project

More information about codeception at : https://continuousphp.com/documentation/testing/codeception/

## Test locally

We use docker containers to simulate the environment and run tests:

* Run acceptance tests inside a php7.0 container: `make run-acceptance-tests`

If you want only start selenium: `make start-selenium` 

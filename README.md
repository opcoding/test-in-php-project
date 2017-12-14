[![continuousphp](https://img.shields.io/continuousphp/git-hub/continuoustest/test-in-php-project/ci/continuousphp.svg)]()

## Test in ContinuousPHP

View the configuration and builds of this project on ContinuousPHP

https://app.continuousphp.com/git-hub/continuoustest/test-in-php-project

More information about codeception at : https://continuousphp.com/documentation/testing/codeception/

## Test locally

You can use docker container to simulate the environement

```
# Start selenium
docker-compose up -d selenium

# Launch codeception test inside a php7.0 container
docker-compose up codeception
```

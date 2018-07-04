
[![Build Status](https://travis-ci.org/codelabsab/web.svg?branch=codelabs.se)](https://travis-ci.org/codelabsab/web)

#
# Code Labs AB
Code Labs Webpage running on:

- s3 static website (AWS S3)
- CDN edge locations (AWS CloudFront)
- certification manager (AWS Certificate manager))
- Route 53 (AWS)
- Travis-CI build on push -> push to s3 bucket
- publish website on codelabs.se S3 bucket

# Instructions

`If you push new code travis-CI will trigger a build and push the files to the codelabs.se S3 bucket on AWS`

`Pushes everything under ./src/web/* to S3 bucket`

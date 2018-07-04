
# Code Labs AB
Code Labs Webpage running on:

- s3 static website (AWS S3)
- CDN edge locations (AWS CloudFront)
- certification manager (AWS Certificate manager))
- Route 53 (AWS)
- Travis-CI build on push -> push to s3 bucket
- publish website on dev.codelabs.se S3 bucket

# Instructions

`If you push new code travis-CI will trigger a build and push the files to the dev.codelabs.se S3 bucket on AWS`

`If you want to push it to codelabs.se - change or update the .travis.yml file Bucket location name`

`Pushes everything under ./src/web/* to S3 bucket`

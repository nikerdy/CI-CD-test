# CI-CD-test
## 順序
### Use ngrok let drone-ip to public ip
```
ngrok http 8081
``` 
### Set Gitlab or Github application to get ID and secret

### Use docker-compose create drone-docker
```
docker-compose up -d
```
### vim .drone.yaml
```
vim .drone.yaml
```

### Push web to test/html
```
vim index.php
mv index.php test/html
```

### vim phpunit
```
vim Test.php
mv Test.php test/html
```

### vim phpunit path
```
vim config.xml
```

### vim Dockerfile
```
vim Dockerfile
```

### vim deploy
```
vim deploy.yaml
```

### Create a deploy to GKE
```
kubectl create -f deploy.yaml
```
### Git push
```
git push xxx xxx
```

Then you will see CI/CD running


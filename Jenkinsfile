pipeline {
  agent {
    docker {
      image 'keitamido/cent7-dev'
      args '--privileged -d  -h docker-dev01'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh '''ls -alF
composer install'''
      }
    }
    stage('Test') {
      steps {
        sh 'vendor/bin/phpunit tests'
      }
    }
  }
}
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
        sh '''pwd
ls -alF
composer install'''
      }
    }
    stage('Test') {
      steps {
        sh 'vendor/bin/phpunit tests'
      }
    }
    stage('echo') {
      steps {
        echo 'Complete!!'
      }
    }
    stage('send_slack') {
      steps {
        slackSend(message: 'success', color: 'good')
      }
    }
  }
}
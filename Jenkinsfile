pipeline {
    agent any

    stages {

        stage('Checkout Code') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-app .'
            }
        }

        stage('Deploy Container') {
            steps {
                sh '''
                docker stop php-app || true
                docker rm php-app || true
                docker run -d -p 80:80 --name php-app php-app
                '''
            }
        }

    }
}

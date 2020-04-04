pipeline {
    environment {
        region = "eu-west-1"
        account_id = "250373516626"
        name = "tvarit.com"
        registry = "${account_id}.dkr.ecr.${region}.amazonaws.com"
        repository = "${registry}/tvarit.com"
    }
    agent any
    stages {
        stage('Build') {
            steps{
                script {
                    docker.build "${repository}:$BUILD_NUMBER"
                }
            }
        }
        stage('Deploy') {
            steps{
                sh "docker tag ${repository}:$BUILD_NUMBER ${repository}:latest"
                withCredentials([usernamePassword(credentialsId: "aws-ecr-${region}", passwordVariable: 'AWS_ECR_TOKEN', usernameVariable: '')]) {
                    sh "docker login -u AWS -p ${AWS_ECR_TOKEN} ${registry}"
                }
                sh "docker push ${repository}:$BUILD_NUMBER"
                sh "docker push ${repository}:latest"
            }
        }
    }
}

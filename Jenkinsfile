pipeline {
    agent any 

    stages {
        stage('Build') { 
            steps { 
                sh  'echo  "BUILD STAGE"' 
            }
        }
        stage('Test'){
            steps {
                sh  'echo  "TEST STAGE"' 
            }
        }
        stage('Deploy'){
            steps {
                sh  'echo  "DEPLOY STAGE"' 
            }
        }
    }
}

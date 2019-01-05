pipeline {
    agent any 

    stages {
        stage('Build') { 
            steps { 
                sh  'echo  "BUILD STAGE"' 
            }
        }
        stage('Checkstyle') {
            steps {
                sh 'vendor/bin/phpcs --report=checkstyle --report-file=`pwd`/build/logs/checkstyle.xml --standard=PSR2 --extensions=php --ignore=autoload.php --ignore=vendor/ . || exit 0'
                checkstyle pattern: 'build/logs/checkstyle.xml'
                }
        }
        
        stage("composer_install") {
            sh 'composer install'
        }

        stage("php_lint") {
            sh 'find . -name "*.php" -print0 | xargs -0 -n1 php -l'
        }

        stage("phpunit") {
            sh 'vendor/bin/phpunit'
        }

        stage("codeception") {
            sh 'vendor/bin/codecept run'
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

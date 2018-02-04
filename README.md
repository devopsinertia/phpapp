# Welcome to Docker Php Jenkins!

This repository allows for creating a **Containerized PHP Application** by a shell script. Moreover, it can be used for testing in **Jenkins**.

## Docker :whale:

First of all, it is necessary to install **Docker** on the machine ( [More Information](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/) ).

Secondly, it is advisable to install **Git** on the machine in order to get repository ( [More Information](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) ).

Having done that, run **build.sh**.

    ./build.sh

## Jenkins :man:

First of all, it is necessary to install **Jenkins** on the machine ( [More Information](https://jenkins.io/download/) ).

Secondly, create a new job on **Jenkins** and configure it in order to get **GitHub repository**.

    Source Code Management --> https://github.com/rdrgporto/docker-php-jenkins.git
  
Finally, we configure **Build section**.

    Build --> Execute shell -> chmod +x build.sh && ./build.sh

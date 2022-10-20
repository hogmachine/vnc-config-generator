# vnc-config-generator
#Prepare
1. Install docker-ce docker
2. go to /.../vnc-config-generator
# BULD AND RUN
build the image:
docker build -t hogmachine/vnc-config .
Run:
docker run -d -p 80:80 --name vncgenerator hogmachine/vnc-config
Open in blowser http://your.ip/

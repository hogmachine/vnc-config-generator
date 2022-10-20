# vnc-config-generator
#Prepare
1. Install docker-ce docker
2. go to /.../vnc-config-generator
# BULD AND RUN
1. build the image:
1. docker build -t hogmachine/vnc-config .
2. docker run -d -p 80:80 --name vncgenerator hogmachine/vnc-config
3. Open in blowser http://your.ip/

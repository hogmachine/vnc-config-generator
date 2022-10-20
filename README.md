# vnc-config-generator
Generates tightvnc connection file fo Tightvnc viewer
# BULD AND RUN
1. Install docker-ce docker
2. go to /.../vnc-config-generator
1. build the image:
1. docker build -t hogmachine/vnc-config .
2. docker run -d -p 80:80 --name vncgenerator hogmachine/vnc-config
3. Open in blowser http://your.ip/
![image](https://user-images.githubusercontent.com/39591816/196891722-f0bcace5-3892-4679-94d2-e10a6dd2e5c7.png)

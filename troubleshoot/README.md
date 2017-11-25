# troubleshoot
# Steps needs to follow to run this app

ssh access to vps

install nodejs latest version

install npm latest version

to install latest nodejs and npm version follow steps


    sudo apt-get install python-software-properties

    curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -

    sudo apt-get install -y nodejs

install redis and run service forever

    sudo apt-get install redis

intall pm2 cli with npm 
    
    npm install -g pm2

install ruby via apt

    sudo apt install ruby

cd /projectfolder

then install redis via ruby 

    gem install redis

for working script correctly to store data

if these all steps works fine just run  

    ruby ruby_ws.rb
    some time this operation show permession error

    in this case you need to give 777 permession to ruby file
    command :

    sudo chmod 777 ruby_ws.rb

    then you can run 

    ruby ruby_wa.rb

 if console will display adding records means all process work successfull now we can search autocomplete

 run nodejs server file forever 

     pm2 start node_ws.js
     if need restart
     pm2 restart 0
     if need stop
     pm2 stop 0
     further you can see pm2 documentation in npm


you can put your file into any public directly 
i hope you know how to do it

FROM ubuntu:20.04

ENV LANG=ja_JP.UTF-8
RUN apt-get update \
    && apt-get install curl jq oathtool -y
 
WORKDIR /app
COPY ./alexa_remote_control.sh /app/
 
ENTRYPOINT ["./alexa_remote_control.sh"] 

# ð alexa-remote-control

![GitHub issues](https://img.shields.io/github/issues/isystk/alexa-remote-control)
![GitHub forks](https://img.shields.io/github/forks/isystk/alexa-remote-control)
![GitHub stars](https://img.shields.io/github/stars/isystk/alexa-remote-control)
![GitHub license](https://img.shields.io/github/license/isystk/alexa-remote-control)

## ð ãã­ã¸ã§ã¯ãã®æ¦è¦

ãalexa-remote-controlããå©ç¨ãã¦Alexaãèªç±ã«åãããä»çµã¿ãæ§ç¯ãã¾ãã
PHPçµç±ã§Alexaã¨ã®éä¿¡ãè¡ãã¾ãã

### å©ç¨ãã¦ããæè¡

- apache
- php
- alexa-remote-control

## ð¦ ãã£ã¬ã¯ããªæ§é 
```
.
âââ LICENSE
âââ README.md
âââ dc.sh
âââ docker
â   âââ docker-compose.yml
â   âââ ubuntu
âââ htdocs
    âââ alexa_remote_control.sh
    âââ env.example.sh
    âââ env.sh â ãã®ãã¡ã¤ã«ã¯è¿½å ãã¦ãã ãã
    âââ exec.php
    âââ index.php
```

## ð§ ç°å¢ã®æ§ç¯

â» ãã®ç°å¢ãå©ç¨ããçºã«ã¯ãäºåã«dockerãdocker-composeãåä½ããç¶æã§ãããã¨ãåææ¡ä»¶ã§ãã
(Windowsã®å ´åã¯ãä»¥ä¸ãåèã«ãWSLãã¨ãDocker Desktop for Windowsããç¨æãã¦ãã ãã)

### WSLã®ã¤ã³ã¹ãã¼ã«ï¼Windowsã®å ´åï¼
åè
https://docs.microsoft.com/ja-jp/windows/wsl/install

WSLã§Ubuntuãèµ·åãã
```
# ååèµ·åæã«ãã¦ã¼ã¶åã¨ãã¹ã¯ã¼ããèããã¾ãã
# ä½ãå¥åããã«Enterãæ¼ãã¨root ã¦ã¼ã¶ã¼ã§å©ç¨ã§ããããã«ãªãã®ã§ãrootã¦ã¼ã¶ã¼ã¨ãã¦è¨­å®ãã¾ãã

# åãã«ã©ã¤ãã©ãªãææ°åãã¾ãã
$ apt update

# æ¥æ¬èªã«å¯¾å¿ãã¦ããã¾ãã
$ apt -y install language-pack-ja
$ update-locale LANG=ja_JP.UTF8
$ apt -y install manpages-ja manpages-ja-dev
```

### Docker Desktop for Windows ã®ã¤ã³ã¹ãã¼ã«ï¼Windowsã®å ´åï¼

https://docs.docker.com/docker-for-windows/install/
```
âã³ãã³ããã­ã³ããã§ãã¼ã¸ã§ã³ãè¡¨ç¤ºãããã°OK
docker --version
```

### WSL2ãããDocker for Windows ãå©ç¨ã§ããããã«ããï¼Windowsã®å ´åï¼
åè
https://qiita.com/endo_hizumi/items/0cc50bdfbd827579733e
```
ï¼ï¼éç¥é åãããdockerã®ã¢ã¤ã³ã³ãå³ã¯ãªãã¯ãã¦ãSettingãé¸æ
ï¼ï¼Generalã®expose deamon on~~ã®ãã§ãã¯ãå¥ãã¾ãã
ï¼ï¼Resourcesã®WSL INTEGRATION ããã"Ubuntu" ãã¹ã¤ãããONã«ãã¾ãã

WSL å´ã®ã«ã¼ãã Docker for Windows ã«åãããããã« WSL ã®ãã¦ã³ãè¨­å®ãè¡ãã¾ãã
$ vi /etc/wsl.conf
---
[automount]
root = /
options = "metadata"
---

ä»¥ä¸ã®ããã« Cãã©ã¤ãã®ãã¹ã"/mnt/c/"â"/c/" ã«å¤æ´ããã¦ããã°æ­£å¸¸ã§ãã
$ cd /c/Users/USER/github/laravel-react-boilerplate
$ pwd
/c/Users/USER/github/laravel-react-boilerplate

# WSL ä¸ã«Dockerã¨Docker Composeãã¤ã³ã¹ãã¼ã«ããã
$ apt install docker
$ apt install docker-compose

ããã§WSLããWindowså´ã«ã¤ã³ã¹ãã¼ã«ããDockerãå©ç¨ã§ããããã«ãªãã¾ãã
```

## ðï¸ ä½¿ãæ¹

```bash
# Dockerãèµ·åãã¾ãã
$ ./dc.sh start

# è¨­å®ãã¡ã¤ã«ã«ã¢ã«ã¦ã³ãæå ±ãè¨è¼ãã¦ãã ããã
$ cd htdocs
$ cp env.example.sh env.sh
$ vi env.sh
```

### Deviceãç¢ºèªãã
http://localhost/exec.php?status
![status](./status.png "status")

### ã¡ãã»ã¼ã¸ãéä¿¡ãã
http://localhost/exec.php?text_tts=ãã¹ã
![message](./message.png "message")

## ð åè

| ãã­ã¸ã§ã¯ã| æ¦è¦|
| :---------------------------------------| :-------------------------------|
| [Alexa(Amazon Echo)ãã³ãã³ãã©ã¤ã³ããèªç±ã«åãããæ¹æ³](https://qiita.com/shge/items/169de61c8f246d26c110)| Alexa(Amazon Echo)ãã³ãã³ãã©ã¤ã³ããèªç±ã«åãããæ¹æ³|


## ð« Licence

[MIT](https://github.com/isystk/alexa-remote-control/blob/master/LICENSE)

## ð Author

[isystk](https://github.com/isystk)

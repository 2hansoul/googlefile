#!/bin/bash

#read -p "add file name :" file 

git config user.name "lhs"
git config user.email "2hansoul@naver.com"


git add .

echo "add all file"



git status

read  -p "git commit -m : " commit
#커밋메시지 안 남기면 최대3번 까지 물어본다 말 하면 종료한다
for ((i=0; i<2; i++))
do 
    if [ -z "$commit" ] ; then
        echo "commit 메시지를 남겨주세요"
        read -p  "git commit -m : " commit 
    else  
        read -p "$commit message commit 하시겠습니까?[y/n]?" yn
        case $yn in
            [Yy]* ) git commit -m "$commit";  git push origin master; break;;
            [Nn]* ) exit;;
        esac    
    fi
done













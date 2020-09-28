# Git Guide

1. Fork the repo https://github.com/tvarit-foggy/tvarit.com
2. Clone the repository from your account 
    ```
    git clone https://github.com/<username>/tvarit.com
    ```
3. Add remote upstream
    ```
    git remote add upstream https://github.com/tvarit-foggy/tvarit.com
    ```
4. For every new issue create a new branch
    ```
    git fetch upstream
    git checkout upstream/develop
    git checkout -b <new branch name>
    ```
5. Make your changes
6. Add files and commit the changes
    ```
    git add <filename>
    git commit -m "<message with description of change>"
    ```
7. Push the changes to the repo
    ```
    git push --set-upstream origin <new branch name>
    ```
8. Create a pull request to the branch develop.



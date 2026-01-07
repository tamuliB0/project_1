 ## How to setup the project:
1. Ensure that ddev is installed on your system before proceeding.
2. Always run all ddev commands in your repository root folder.
3. Run below command for setting up ddev configurations for this project -
    ```sh
     ddev config
     ```
     Note: The above command will ask for a project name, you can choose any name and then follow along the prompts and **remember to select the project type as `PHP`**.
5. Run below command to start the web-server, database and php containers.
    ```sh
     ddev start
     ```
6. Finally run below command to start your application.
    ```sh
     ddev launch (ddev-launch.png)
     ```
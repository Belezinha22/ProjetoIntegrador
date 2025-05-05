Comandos basicos e necessários do git:

*link do video:*
https://www.youtube.com/watch?v=UBAX-13g8OM

⚠️Tenha certeza de que esteja mexendo na pasta do projeto ao usar o git⚠️
    - Abra o explorador de arquivos
    - Encontre a pasta do projeto
    - botão direito
    - clique em git bash here
        - caso ainda não apareça clique em mais opções
        - git bash here![alt text](image.png)



⚠️Utilizem apenas os comandos com o sinal 🟢⚠️

🟢
$ git clone https://github.com/Belezinha22/ProjetoIntegrador
    - Clona o repositório do github na sua maquina localmente

🟢
$ git pull
    - Atualiza os arquivos da sua maquina com base nas atualizações do repositório original

🟢
$ git branch -M "main"
    - Nova nomenclatura da branch (⚠️Necessário⚠️)

🟢
$ git add nomeDoArquivo.extensãoDoArquivo
    - Adiciona o arquivo alterado para o "stading" (veja o video para entender)

🟢
$ git status
    - Para ver quais arquivos/pastas/alterações precisam ser enviadas

🟢
$ git commit -m "Titulo da atualização dos arquivos/pastas"
    - Apenas o commit padrão

🔴
$ git remote add origin https://github.com/Belezinha22/ProjetoIntegrador
    - cria uma conexão com o nosso repositorio local com o repositorio no github (Este comando (remote) só é utilizado uma vez para a criação da conexão. Nas proximas vezes apenas use `git push origin main`)

🟢
$ git push -u origin main
    - adiciona os arquivos ESPECIFICADOS que estão nos commits no nosso repositório local para o repositório no github

🟢
$ git push .
    - adiciona TODOS os arquivos que estão nos commits no nosso repositório local para o repositório no github

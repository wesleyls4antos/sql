SELECT matricula, nome, cpf FROM aluno WHERE matricula = "202300006"

SELECT * FROM curso WHERE sigla = "JDI"

SELECT * FROM curso WHERE sigla = "CCO" or sigla = "JDI"

SELECT * FROM curso, aluno WHERE nome = "Bruce Wayne" AND sigla = "STI"


SELECT * FROM aluno_curso, aluno WHERE matricula = "202300001"

SELECT nome_curso, matricula, nome, cpf FROM aluno_curso
INNER JOIN aluno ON aluno = matricula 
INNER JOIN curso ON curso = cod_curso 
WHERE matricula = "202300001" 
 SELECT nome_curso, matricula, nome, cpf FROM aluno_curso
INNER JOIN aluno ON aluno = matricula 
INNER JOIN curso ON curso = cod_curso 
WHERE matricula = "202300001" 

SELECT nome, matricula, nome_curso, nome_disciplina FROM aluno_curso 
INNER JOIN aluno ON aluno = matricula 
INNER JOIN curso ON curso = cod_curso 
INNER JOIN aluno_turma ON aluno_turma.aluno = matricula
INNER JOIN turma ON aluno_turma.turma = cod_turma
INNER JOIN disciplina ON turma.disciplina = cod_disciplina 
WHERE matricula = "202300001" 

UPDATE curso SET nome_curso = 'Redes de computadores' WHERE  cod_curso = 7

DELETE FROM curso WHERE cod_curso = 7

DELETE FROM curso WHERE cod_curso = 1
SET foreign_key_checks = 1

<?php
include 'controller/conexao.php';

?>

<h2>Pesquisa Aluno</h2>
    
     <table>
     <thead>
     <tr>
     <th>Matricula</th>
     <th>Aluno</th>
     <th>Data de Nascimento</th>
     <th>Cidade</th>
     <th>Editar</th>
     <th>Deletar</th>
     </tr>
    </thead>

    <tbody>
     <?php 
     
     while($linha = mysqli_fetch_array($consulta_alunos)){
         $nasci = date('d/m/Y',strtotime($linha['nascimento']));
         echo '<tr><td>'.$linha['matricula'].'</td>';
         echo '<td>'.$linha['nome'].'</td>';
         echo '<td>'.$nasci.'</td>';
         echo '<td>'.$linha['cidade'].'</td>';
         echo '<td>';?><a href="">Editar</a><?php echo '</td>';
         echo '<td>';?><a href="">Excluir</a><?php echo '</td>';
         echo '</tr>';
     }
     ?>
     </tbody>
     </table>
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <center><h1><a href="http://www.ifpe.edu.br/">Instituto Federal de Pernambuco</a></h1></center>
        <nav id="menu">
            <ul style="list-style-type:none">
                <li><a disable href="home.php"> <i class="fa fa-home"></i> Início | </a></li>
                <li><a disable href="fluxograma_ipi.php"> <i class="fa fa-th-large"></i> Grade Curricular | </a></li>
                <li><a href="http://www.ifpe.edu.br/campus"><i class="fa fa-map-marker" ></i> Campi | </a></li>
                <li><a href="https://www.ifpe.edu.br/contato/contatos-telefonicos-ifpe-23ago-1.pdf"> <i class="fa fa-address-book"></i> Contato | </a></li>
<?php 
    session_start();
    if(!isset($_SESSION['user'])){

?>
                <li><a class="fa fa-id-card-o" href="user_form.php"> Sign Up</a></li>
                <li><a class="fa fa-user-o" href="index.php"> Login</a></li>
                </ul>
            </nav>
    </header>
    <aside>
        <div class="menu">
            <p id="letra">Menu</p>
            <div class="opcao">
                <ul style="list-style-type:none">
                    <li><a href="user_form.php">Cadastrar Usuário </a></li>
                    <li><a href="form_requerimento_aluno.php">Requerimento Aluno(a) </a></li>
                    <li><a href="form_faltas_professor.php">Formulário de Falta dos Professores</a></li>
                    <li><a href="fluxograma_ipi.php">Grade Curricular </a></li>
                </ul>
            </div>
        </div>
    </aside>
                <?php 
    }else{
        require 'conexao.php';
        ?>
            <li><a href="perfil.php"><?= $_SESSION['user'];?>..</a></li>
            <li><a href="logout.php">Sair</a></li>
                </ul>
                </nav>
        </header>
        <aside>
            <div class="menu">
                <p id="letra">Menu</p>
                <div class="opcao">
                    <ul style="list-style-type:none">
                        <li><a href="form_requerimento_aluno.php">Requerimento Aluno(a) </a></li>
                        <li><a href="form_faltas_professor.php">Formulário de Falta dos Professores</a></li>
                        <li><a href="fluxograma_ipi.php">Grade Curricular </a></li>
                    <?php 
                        if($_SESSION['tipo'] == "Servidor"){
                            ?> 
                            <li><a href="Listagem.php">Listagem </a></li>
                    
                    <?php 
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </aside>
    <?php 
    }         
       ?>
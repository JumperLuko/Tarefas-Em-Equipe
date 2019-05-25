<!DOCTYPE html>
<html lang="pt-br">
	<?php require_once('./rdd/head.html'); ?>
	</head>
	<body>
        <?php require_once('./rdd/header.html'); ?>
        <header class="flex wrap">
            <a class="titlePage flex center col-2 h3" href=".">Tarefas</a>
            <form class="col-10 flex wrap aroundH">
                <input type="search" placeholder="Pesquisa">
                <div>
                    <span>Equipes</span>
                    <select>
                        <option>Todas</option>
                        <option>QG</option>
                        <option>Apresentação</option>
                    </select>
                </div>
                <div>
                    <span>Categoria</span>
                    <select>
                        <option>Todas</option>
                        <option>Compras</option>
                        <option>Montagens</option>
                        <option>Treinamento</option>
                        <option>adm add + opções</option>
                    </select>
                </div>
                <div>
                    <span>Prioridade</span>
                    <select>
                        <option>Todas</option>
                        <option>Urgente</option>
                        <option>Importante</option>
                        <option>Normal</option>
                        <option>Baixa relevância</option>
                        <option>Irrelevante</option>
                    </select>
                </div>
                <div>
                    <span>Nivel</span>
                    <select>
                        <option>Principal</option>
                        <option>Subcategoria</option>
                        <option>Todos</option>
                    </select>
                </div>
                <div>
                    <span>Status</span>
                    <select>
                        <option>Aberto</option>
                        <option>Finalizado</option>
                        <option>Pausado</option>
                    </select>
                </div>
                <div>
                    <span>Usuário</span>
                    <input type="search" placeholder="Nick exato">
                </div>
                <input type="submit" title="Buscar"/>
            </form>
        </header>
        <main class="resultadoPesquisa grid gacol--9">
                <span class="ordenamento">Nome</span>
                <span class="ordenamento">Descrição</span>
                <span class="ordenamento">Equipe</span>
                <span class="ordenamento">Categoria</span>
                <span class="ordenamento">Prioridade</span>
                <span class="ordenamento">Nivel</span>
                <span class="ordenamento">Criador</span>
                <span class="ordenamento">Modificação</span>
                <span class="ordenamento">Criação</span>

                <span>Criando troço</span>
                <span>Descrevendo bagulho</span>
                <span>QG</span>
                <span>Montagens</span>
                <span>Normal</span>
                <span>Finalizado</span>
                <span>Thiago</span>
                <span>0/0/0</span>
                <span>0/0/0</span>
                
                <span>Criando troço</span>
                <span>Descrevendo bagulho</span>
                <span>QG</span>
                <span>Montagens</span>
                <span>Normal</span>
                <span>Finalizado</span>
                <span>Thiago</span>
                <span>0/0/0</span>
                <span>0/0/0</span>

                <span>Criando troço</span>
                <span>Descrevendo bagulho</span>
                <span>QG</span>
                <span>Montagens</span>
                <span>Normal</span>
                <span>Finalizado</span>
                <span>Thiago</span>
                <span>0/0/0</span>
                <span>0/0/0</span>

                <span>Criando troço</span>
                <span>Descrevendo bagulho</span>
                <span>QG</span>
                <span>Montagens</span>
                <span>Normal</span>
                <span>Finalizado</span>
                <span>Thiago</span>
                <span>0/0/0</span>
                <span>0/0/0</span>

        </main>
    </body>
</html>

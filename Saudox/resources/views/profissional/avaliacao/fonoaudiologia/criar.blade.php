@extends('layouts.mainlayout')
@section('content')


    <div id="container_blocos_questionarios" style="display: none;">


        <div id="nenhum_bloco"> <input name="respostas[]" type="hidden" /></div>

        <div id="bloco_12_17_meses">

            <h3 style="margin-left: 12%;">Linguagem Receptiva</h3><br>

            <br><br>

            <h4>1. Mantém a atenção <i>(por dois minutos)</i>.<input name="respostas[quest_12_17][0]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: – Auditivo: brinquedos sonoros. <br>
                          – Visual: brinquedos em movimento – carrinho ou bichinho. <br><br>

            <i>
                <h4>Inicialmente, interaja com a criança, em seguida: </h4><br>

                a. Auditiva: faça um som do lado direito, depois do lado esquerdo e, por faça um som do lado direito, depois do lado esquerdo e, por <br>
                último atrás da criança, observando se ela procura a fonte sonora. <input name="respostas[quest_12_17][1]" type="text" /><br><br>


                b. Visual: movimente o objeto da esquerda para a direita, em sentido movimente o objeto da esquerda para a direita, em sentido <br>
                contrário e para cima, observando se a criança acompanha com o olhar o movimento realizado). <input name="respostas[quest_12_17][2]" type="text" /><br><br>
            </i>

            <br><br><br><br>

            <h4>2. Compreende ordens simples com pistas gestuais. <input name="respostas[quest_12_17][3]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: bola e bonequinha. <br><br>

            <i>
                <h4>Coloque o material perto da criança e diga: Vamos brincar? </h4><br>

                a. Pegue a bola. <input name="respostas[quest_12_17][4]" type="text" /><br><br>
                b. Dê a bola para mim. <input name="respostas[quest_12_17][5]" type="text" /><br><br>
                c. Agora, dê a bola para o neném. <input name="respostas[quest_12_17][6]" type="text" /><br><br>
            </i>

            <br><br><br><br>

            <h4>3. Identifica objetos familiares. <input name="respostas[quest_12_17][7]" type="text" /></h4><br>
            (1 ponto = reconhece pelo menos um objeto, sempre) <br><br>

            Material: cachorro, carrinho, bola, bonequinha. <br><br>

            <i>
                <h4>Coloque o material perto da criança e diga: Onde está? </h4><br>
                a. a bola <input name="respostas[quest_12_17][8]" type="text" /><br><br>
                b. o carro <input name="respostas[quest_12_17][9]" type="text" /><br><br>
                c. a neném <input name="respostas[quest_12_17][10]" type="text" /><br><br>
                d. o cachorro <input name="respostas[quest_12_17][11]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>4. Identifica figuras. <input name="respostas[quest_12_17][12]" type="text" /></h4><br>
            (1 ponto = aponta consistentemente para uma figura) <br><br>

            Material: Manual de Figuras, pág. 1. <br><br>

            <i>
                Você está vendo essas figuras? Mostre... <br><br>
                a. a bola <input name="respostas[quest_12_17][13]" type="text" /><br><br>
                b. o carro <input name="respostas[quest_12_17][14]" type="text" /><br><br>
            </i>


            <br><br><br><br>
            <br><br><br><br>

            <h3 style="margin-left: 12%;">Linguagem Expressiva</h3><br>

            <br><br>


            <h4>1. Produz sons silábicos variados (faz combinação de sons). <input name="respostas[quest_12_17][15]" type="text" /></h4>
            (1 ponto = produz duas sílabas ou mais variando os fonemas em uma emissão vocal)<br><br>

            Observação realizada em contexto lúdico. <i>Escreva os exemplos</i>: <br>
            <input name="respostas[quest_12_17][16]" type="text" style="width: 30%;"/> <br><br>

            <br><br><br><br>

            <h4>2.Possui vocabulário de pelo menos uma palavra: <input name="respostas[quest_12_17][17]" type="text" /></h4>
            (1 ponto = usa consistentemente a mesma combinação de sons para nomear uma pessoa ou um objeto)<br><br>

            <br><br><br><br>

            <h4>3.Comunica-se de forma não verbal, usando gestos, chamando atenção <br>
                para si ou apontando para um objeto ou pessoa. <input name="respostas[quest_12_17][18]" type="text" /></h4>
            (1 ponto = se apresenta alguns dos comportamentos descritos. Ex.: entrega brinquedo, puxa pela mão, aponta etc.)<br><br>

            <i>Descreva o que a criança faz: </i> <br>
            <input name="respostas[quest_12_17][19]" type="text" style="width: 30%;"/> <br><br>

            <br><br><br><br>


            <h4>4.Imita uma palavra. <input name="respostas[quest_12_17][20]" type="text" /></h4>
            (1 ponto = repete 1 palavra)<br><br>

            Material: bola, carro, miniatura de boneco ou palavras do contexto da criança como “mamãe” e “papai”. <br><br>

            <i>

                A examinadora aponta para o objeto e em seguida nomeia para a <br>
                criança, estimulando-a a repetir:<br>
            </i>
            Ex.: Olhe a bola...bola <br>
            (bola, neném, carro, papai e mamãe) <br>
            <!-- o finalzinho parece ser só exemplos... -->

        </div>

        <div id="bloco_1e6_1e11_meses">
            <h3 style="margin-left: 12%;">Linguagem Receptiva</h3><br>

            <br><br>

            <h4>5.Compreende ordens simples sem pistas gestuais.<input name="respostas[quest_1e6_1e11_meses][0]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: bolsa e algumas bolas. <br>
            Ordem: Vamos ver as bolas que estão dentro da bolsa?. <br><br>

            <i>
                a. Tire as bolas da bolsa <input name="respostas[quest_1e6_1e11_meses][1]" type="text" /><br><br>

                b. Agora me dê uma bolsa <input name="respostas[quest_1e6_1e11_meses][2]" type="text" /><br><br>

                c. Agora ponha as bolas dentro da bolsa <input name="respostas[quest_1e6_1e11_meses][3]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>6.Identifica figuras.<input name="respostas[quest_1e6_1e11_meses][4]" type="text" /></h4><br>
            (1 ponto = 4 acertos) <br><br>

            Material: Manual de Figuras, pág.2. <br>
            Ordem: Olhe estas figuras. Mostre... <br><br>

            <i>
                a. a banana <input name="respostas[quest_1e6_1e11_meses][5]" type="text" /><br><br>

                b. o pé <input name="respostas[quest_1e6_1e11_meses][6]" type="text" /><br><br>

                c. o carro <input name="respostas[quest_1e6_1e11_meses][7]" type="text" /><br><br>

                d. o sapato <input name="respostas[quest_1e6_1e11_meses][8]" type="text" /><br><br>

                e. o gato <input name="respostas[quest_1e6_1e11_meses][9]" type="text" /><br><br>

                f. a mão <input name="respostas[quest_1e6_1e11_meses][10]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>7.Identifica partes do corpo em si próprio.<input name="respostas[quest_1e6_1e11_meses][11]" type="text" /></h4><br>
            (1 ponto = 4 acertos) <br><br>

            Ordem: Mostre o(a) seu(ua)... <br><br>

            <i>
                a. cabelo <input name="respostas[quest_1e6_1e11_meses][12]" type="text" /><br><br>

                b. olho <input name="respostas[quest_1e6_1e11_meses][13]" type="text" /><br><br>

                c. nariz <input name="respostas[quest_1e6_1e11_meses][14]" type="text" /><br><br>

                d. pé <input name="respostas[quest_1e6_1e11_meses][15]" type="text" /><br><br>

                e. orelha <input name="respostas[quest_1e6_1e11_meses][16]" type="text" /><br><br>

                f. mão <input name="respostas[quest_1e6_1e11_meses][17]" type="text" /><br><br>

                g. boca <input name="respostas[quest_1e6_1e11_meses][18]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>8.Compreende ações dentro de um contexto.<input name="respostas[quest_1e6_1e11_meses][19]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: um cachorrinho, um pratinho, uma colher e um copo. <br>
            Ordem: Coloque o material sobre a mesa e fale para a criança: <br><br>

            <i>
                a. O cachorro está com fome. Dê comida pra ele comer. <input name="respostas[quest_1e6_1e11_meses][20]" type="text" /><br><br>

                b. O cachorro está com sede. Dê água pra ele beber. <input name="respostas[quest_1e6_1e11_meses][21]" type="text" /><br><br>

                c. O cachorro está com sono. Bote ele pra dormir. <input name="respostas[quest_1e6_1e11_meses][22]" type="text" /><br><br>

            </i>

            <br><br><br><br>
            <br><br><br><br>

            <h3 style="margin-left: 12%;">Linguagem Expressiva</h3><br>

            <br><br>


            <h4>5. Nomeia objetos. <input name="respostas[quest_1e6_1e11_meses][23]" type="text" /></h4>
            (1 ponto = 2 acertos)<br><br>

            Material: carrinho, cachorro, bola, bonequinha. <br>
            Aponte para cada objeto e pergunte para a criança: O que é isso? <br><br>

            <i>
                a. bola <input name="respostas[quest_1e6_1e11_meses][24]" type="text" /><br><br>

                b. carro <input name="respostas[quest_1e6_1e11_meses][25]" type="text" /><br><br>

                c. neném <input name="respostas[quest_1e6_1e11_meses][26]" type="text" /><br><br>

                d. cachorro <input name="respostas[quest_1e6_1e11_meses][27]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>6. Produz seqüência de palavras soltas: <input name="respostas[quest_1e6_1e11_meses][28]" type="text" /></h4>
            (1 ponto = fala sobre um objeto, pessoa ou acontecimento através da seqüência de duas ou mais palavras em uma mesma emissão vocal)<br><br>
            Observação da linguagem espontânea em atividades lúdicas.<br>
            <i>Crie situações através de brincadeiras para estimular a criança a falar</i>: <br>
            <input name="respostas[quest_1e6_1e11_meses][29]" type="text" style="width: 30%;"/> <br><br>


            <br><br><br><br>

            <h4>7. Compreende relação de posse.<input name="respostas[quest_1e6_1e11_meses][30]" type="text" /></h4>
            (1 ponto = se emprega espontaneamente: meu, minha ou diz o próprio nome)<br><br>
            <i>Ex.: aponte para o seu sapato e diga para a criança:.</i><br>
            <i>Este é o meu sapato. Em seguida aponte para o sapato da criança e pergunte: Este sapato é meu?</i> <br>
            <input name="respostas[quest_1e6_1e11_meses][31]" type="text" /><br><br>

            <br><br><br><br>

            <h4>8.Adquiriu vocabulário de pelo menos 10 palavras diferentes.<input name="respostas[quest_1e6_1e11_meses][32]" type="text" /></h4>
            (1 ponto = disse 10 palavras de forma espontânea no período da avaliação)<br><br>
            <i>Escreva aqui as palavras que a criança disser durante a avaliação:</i>: <br>
            <input name="respostas[quest_1e6_1e11_meses][33]" type="text" style="width: 30%;"/> <br><br>


            <br><br><br><br>
            <!-- o finalzinho parece ser só exemplos... -->
        </div>

        <div id="bloco_2_2e5_meses">
            <h3 style="margin-left: 12%;">Linguagem Receptiva</h3><br>

            <br><br>

            <h4>9. Compreende conceitos espaciais.<input name="respostas[quest_2_2e5_meses][0]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: uma bolsa e três bolas. <br>
            <i>Coloque a bolsa com duas bolas dentro e uma do lado e diga:</i> <br><br>

            <i>
                a. Tire as bolas de dentro da bolsa <input name="respostas[quest_2_2e5_meses][1]" type="text" /><br><br>

                b. Bote a bola em cima da mesa <input name="respostas[quest_2_2e5_meses][2]" type="text" /><br><br>

                c. Bote as bolas dentro da bolsa <input name="respostas[quest_2_2e5_meses][3]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>10.Compreende alguns pronomes.<input name="respostas[quest_2_2e5_meses][4]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: uma cachorrinho e três bolas. <br>
            Diga: <i>Vamos brincar com as bolas e o cachorrinho? <br>
                    Eu dou todas as bolas para você!</i> <br><br>

            <i>
                a. Mostre a sua bola <input name="respostas[quest_2_2e5_meses][5]" type="text" /><br><br>

                b. Agora, você dá uma bola para mim <input name="respostas[quest_2_2e5_meses][6]" type="text" /><br><br>

                <b>Pegue uma bola e pergunte à criança:</b><br>

                c. Onde está a minha bola? <input name="respostas[quest_2_2e5_meses][7]" type="text" /><br><br>

                d. Agora dê uma bola para ele (cachorrinho) <input name="respostas[quest_2_2e5_meses][8]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>11.Compreende conceitos de quantidade.<input name="respostas[quest_2_2e5_meses][9]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: Uma bolsa e três bolas. <br>
            <i>Coloque a bolsa com as bolas em frente a criança e diga:</i><br><br>

            <i>
                a. Me dê só uma bola. <input name="respostas[quest_2_2e5_meses][10]" type="text" /><br><br>

                b. Agora bote o resto das bolas na mesa. <input name="respostas[quest_2_2e5_meses][11]" type="text" /><br><br>

                c. Agora dê todas as bolas para mim. <input name="respostas[quest_2_2e5_meses][12]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>12.Reconhece a ação nas figuras.<input name="respostas[quest_2_2e5_meses][13]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: Manual de figuras pág. 3.<br>
            <i><b>“Mostre quem está...</b></i><br><br>

            <i>
                a. chutando <input name="respostas[quest_2_2e5_meses][14]" type="text" /><br><br>

                b. bebendo. <input name="respostas[quest_2_2e5_meses][15]" type="text" /><br><br>

                c. comendo. <input name="respostas[quest_2_2e5_meses][16]" type="text" /><br><br>

            </i>

            <br><br><br><br>


            <h3 style="margin-left: 12%;">Linguagem Expressiva</h3><br>

            <br><br>

            <h4>9. Usa entonação adequada para fazer pergunta. <input name="respostas[quest_2_2e5_meses][17]" type="text" /></h4>
            (1 ponto = ffaz uma pergunta usando a entonação correta; Ex.: eleva a voz quando faz uma pergunta).<br><br>
            Observação da linguagem espontânea em atividades lúdicas.<br>
            <i>Crie situações através de brincadeiras para estimular a criança a falar</i>: <br>
            <input name="respostas[quest_2_2e5_meses][18]" type="text" style="width: 30%;"/> <br><br>


            <br><br><br><br>

            <h4>10. Combina duas ou mais palavras na fala espontânea. <input name="respostas[quest_2_2e5_meses][19]" type="text" /></h4>
            (1 ponto = se a criança produz duas ou mais palavras em uma emissão vocal e, com significado <br> semântico; Ex.: posse: “papato neném” = o sapato da boneca).<br><br>
            Observação da linguagem espontânea em atividades lúdicas. A examinadora poderá <br> criar situações através de brincadeiras para estimular a criança a falar..<br>
            <i>Escreva os exemplos:</i>: <br>
            <input name="respostas[quest_2_2e5_meses][20]" type="text" style="width: 30%;"/> <br><br>


            <br><br><br><br>

            <h4>11.Nomeia figuras.<input name="respostas[quest_2_2e5_meses][21]" type="text" /></h4><br>
            (1 ponto = 4 acertos) <br><br>

            Material: Manual de figuras, pág. 51.<br>
            <i>Aponte para cada figura e pergunte: <b>O que é isto?</b></i><br><br>

            <i>
                a. tênis ou sapato <input name="respostas[quest_2_2e5_meses][22]" type="text" /><br><br>

                b. carro. <input name="respostas[quest_2_2e5_meses][23]" type="text" /><br><br>

                c. mão. <input name="respostas[quest_2_2e5_meses][24]" type="text" /><br><br>

                d. banana. <input name="respostas[quest_2_2e5_meses][25]" type="text" /><br><br>

                e. pé. <input name="respostas[quest_2_2e5_meses][26]" type="text" /><br><br>

                f. gato. <input name="respostas[quest_2_2e5_meses][27]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>12.Reconhece e nomeia ação em figuras.<input name="respostas[quest_2_2e5_meses][28]" type="text" /></h4><br>
            (1 ponto = 2 acertos) <br><br>

            Material: Manual de figuras, pág. 52.<br>
            <i>Aponte para cada figura e pergunte:</i><br><br>


                <i>a. O que este menino está fazendo?</i> <input name="respostas[quest_2_2e5_meses][29]" type="text" /> (chutando ou jogando)<br><br>

                <i>b. O que esta menina está fazendo?</i> <input name="respostas[quest_2_2e5_meses][30]" type="text" /> (bebendo)<br><br>

                <i>c. E esta menina?</i> <input name="respostas[quest_2_2e5_meses][31]" type="text" /> (dormindo)<br><br>

            <br><br><br><br>


        </div>

        <div id="bloco_2e6_2e11_meses">
            <h3 style="margin-left: 12%;">Linguagem Receptiva</h3><br>

            <br><br>

            <h4>13.Compreende o uso dos objetos.<input name="respostas[quest_2e6_2e11_meses][0]" type="text" /></h4><br>
            (1 ponto = 3 acertos) <br><br>

            Material: Manual de figuras, pág. 4.<br>
            <i>Aponte para cada figura e diga: <b>Mostre...</b></i><br><br>


            <i>
                a. O que você usa para beber? <input name="respostas[quest_2e6_2e11_meses][1]" type="text" /><br><br>

                b. O que nós usamos para varrer o chão? <input name="respostas[quest_2e6_2e11_meses][2]" type="text" /><br><br>

                c. Com o que você penteia o cabelo? <input name="respostas[quest_2e6_2e11_meses][3]" type="text" /><br><br>

                d. O que nós usamos para cortar papel? <input name="respostas[quest_2e6_2e11_meses][4]" type="text" /><br><br>

                e. O que você usa para comer? <input name="respostas[quest_2e6_2e11_meses][5]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>14.Compreende os conceitos dos adjetivos.<input name="respostas[quest_2e6_2e11_meses][6]" type="text" /></h4><br>
            (1 ponto = 3 acertos) <br><br>

            Material: Manual de figuras, págs. 5 a 8.<br>
            <i>Mostre uma página de cada vez e diga: <b>Mostre...</b></i><br><br>


            <i>
                a. o bicho grande <input name="respostas[quest_2e6_2e11_meses][7]" type="text" /><br><br>

                b. a bola pequena <input name="respostas[quest_2e6_2e11_meses][8]" type="text" /><br><br>

                c. o que está quente <input name="respostas[quest_2e6_2e11_meses][9]" type="text" /><br><br>

                d. quem está molhado <input name="respostas[quest_2e6_2e11_meses][10]" type="text" /><br><br>

                e. quem está sujo <input name="respostas[quest_2e6_2e11_meses][11]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>15. Compreende relações parte/todo.<input name="respostas[quest_2e6_2e11_meses][12]" type="text" /></h4><br>
            (1 ponto = 3 acertos) <br><br>

            Material: Manual de figuras, pág. 9.<br>
            <i><b>Mostre...</b></i><br><br>


            <i>
                a. a porta do caminhão <input name="respostas[quest_2e6_2e11_meses][13]" type="text" /><br><br>

                b. a perna do menino <input name="respostas[quest_2e6_2e11_meses][14]" type="text" /><br><br>

                c. o rabo do cachorro <input name="respostas[quest_2e6_2e11_meses][15]" type="text" /><br><br>

                d. as rodas do carro <input name="respostas[quest_2e6_2e11_meses][16]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>16.Identifica figuras.<input name="respostas[quest_2e6_2e11_meses][17]" type="text" /></h4><br>
            (1 ponto = 4 acertos) <br><br>

            Material: Manual de figuras, págs. 10 e 11.<br>
            <i><b>Mostre...</b></i><br><br>


            <i>
                a. o barco <input name="respostas[quest_2e6_2e11_meses][18]" type="text" /><br><br>

                b. o caminhão <input name="respostas[quest_2e6_2e11_meses][19]" type="text" /><br><br>

                c. o avião <input name="respostas[quest_2e6_2e11_meses][20]" type="text" /><br><br>

                d. a mochila <input name="respostas[quest_2e6_2e11_meses][21]" type="text" /><br><br>

                e. a bolsa <input name="respostas[quest_2e6_2e11_meses][22]" type="text" /><br><br>

                f. a mala <input name="respostas[quest_2e6_2e11_meses][23]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h3 style="margin-left: 12%;">Linguagem Expressiva</h3><br>

            <br><br>

            <h4>13.Responde a questões sobre si mesmo.<input name="respostas[quest_2e6_2e11_meses][24]" type="text" /></h4><br>
            (1 ponto = se responde a duas perguntas corretamente) <br><br>

            <i>Pergunte:</i><br><br>

            <i>
                a. Qual é o seu nome? <input name="respostas[quest_2e6_2e11_meses][25]" type="text" /><br><br>

                b. Você é menino ou menina? <input name="respostas[quest_2e6_2e11_meses][26]" type="text" /><br><br>

                c. Você tem irmãos? <input name="respostas[quest_2e6_2e11_meses][27]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>14.Vocabulário.<input name="respostas[quest_2e6_2e11_meses][28]" type="text" /></h4><br>
            (1 ponto = 4 acertos) <br><br>

            Material: Manual de figuras, págs. 53 e 55.<br>
            <i>Aponte para cada figura e pergunte: <b>O que é isto?</b></i><br><br>


            <i>
                a. cavalo <input name="respostas[quest_2e6_2e11_meses][29]" type="text" /><br><br>

                b. cachorro <input name="respostas[quest_2e6_2e11_meses][30]" type="text" /><br><br>

                c. avião <input name="respostas[quest_2e6_2e11_meses][31]" type="text" /><br><br>

                d. barco <input name="respostas[quest_2e6_2e11_meses][32]" type="text" /><br><br>

                e. calça <input name="respostas[quest_2e6_2e11_meses][33]" type="text" /><br><br>

                f. shorte <input name="respostas[quest_2e6_2e11_meses][34]" type="text" /><br><br>

                g. camisa ou blusa <input name="respostas[quest_2e6_2e11_meses][35]" type="text" /><br><br>

            </i>

            <br><br><br><br>

            <h4>15. Emprega palavras que indicam posse.<input name="respostas[quest_2e6_2e11_meses][36]" type="text" /></h4><br>
            (1 ponto = 1 resposta correta) <br><br>

            Material: Manual de figuras, pág. 56.<br>
            <i>AAponte para cada figura e diga:</i><br><br>

                <i>a. Esta bola é dele. De quem é esta bola? <input name="respostas[quest_2e6_2e11_meses][37]" type="text" /></i> (Dela, ou da menina) <br><br>

                <i>b. Este sorvete é dela. De quem é este sorvete? <input name="respostas[quest_2e6_2e11_meses][38]" type="text" /></i> (Dele, ou da menina)<br><br>

            <br><br><br><br>

            <h4>Responde a questões que contenham: “o quê”, “onde” e questões <br>
            que as respostas são sim/não.<input name="respostas[quest_2e6_2e11_meses][39]" type="text" /></h4><br>
            (1 ponto = 2 corretos) <br><br>

            Material: Manual de figuras, pág. 57.<br>
            <i>AAponte para cada figura e pergunte:</i><br><br>

                <i>a. O que ele está segurando? <input name="respostas[quest_2e6_2e11_meses][40]" type="text" /></i> (a bola) <br><br>

                <i>b. Onde está o menino? <input name="respostas[quest_2e6_2e11_meses][41]" type="text" /></i> (no cavalo)<br><br>

                <i>c. Este menino está acordado? <input name="respostas[quest_2e6_2e11_meses][42]" type="text" /></i> (não)<br><br>

            <br><br><br><br>

        </div>



    </div>



    <div class="container">
        <div class="row">
            <div class="espacador_mesma_altura_top_nav"></div>
            <div style="text-align: center; width: 100%;">
                <div class = "caixa_form">
                    <br>
                    <h1>Avaliação de Fonoaudiologia de {{$paciente->nome_paciente}}</h1>


                    <hr class="hr_form">

                    <form style="margin-top: 0;" method="post" action="{{route('profissional.avaliacao.fonoaudiologia.criar.salvar')}}">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul style="padding: 0px;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
                        <input value="{{$paciente->id}}" type="hidden"  name="id_paciente" id="id_paciente">
                        <input value="{{Auth::id()}}" type="hidden"  name="id_profissional" id="id_profissional">

                        <br><br>


                        <label class="required">Dia da avaliação</label><br>
                        <input value="{{ g_old($avaliacao, "data_avaliacao") }}" type="date" name="data_avaliacao" id="data_avaliacao">

                        <label class="required">Hora da Avaliação</label><br>
                        <input value="{{ g_old($avaliacao, "hora_avaliacao") }}" type="time" name="hora_avaliacao" id="hora_avaliacao">



                        <hr class="hr_form">
                        <h3>Motivo da avaliação</h3><br>
                        <textarea required class="textareas_form" id="motivo_avaliacao" name="motivo_avaliacao" rows="4" cols="50" style="">{{ g_old($avaliacao, "motivo_avaliacao") }}</textarea>


                        <hr class="hr_form">
                        <h3>Cálculo dos escores</h3><br>
                        <hr class="hr_form">


                        <table class="table table-dark" style="width: 85%; margin: auto;">
                            <tbody>


                                <tr>
                                    <td style="width: 25%;padding-top: 2.75rem;font-size: 25px; border-right: 2px solid; " rowspan="4">Linguagem Receptiva</td>
                                </tr>

                                <tr>
                                    <td>Última tarefa correta</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "ultima_tarefa_correta_linguagem_receptiva") }}" min="0" type="number" step="0.1" name="ultima_tarefa_correta_linguagem_receptiva" /></td>
                                </tr>

                                <tr>
                                    <td>Menos o total de respostas incorretas</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "menos_total_respostas_incorretoas_linguagem_receptiva") }}" min="0" type="number" step="0.1" name="menos_total_respostas_incorretoas_linguagem_receptiva" /></td>
                                </tr>

                                <tr>
                                    <td>Linguagem Receptiva – Escore Bruto</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "linguagem_receptiva") }}" min="0" type="number" step="0.1" name="linguagem_receptiva" /></td>
                                </tr>






                                <tr>
                                    <td style="width: 25%;padding-top: 2.75rem;font-size: 25px; border-right: 2px solid; " rowspan="4">Linguagem Expressiva</td>
                                </tr>

                                <tr>
                                    <td>Última tarefa correta</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "ultima_tarefa_correta_linguagem_expressiva") }}" min="0" type="number" step="0.1" name="ultima_tarefa_correta_linguagem_expressiva" /></td>
                                </tr>

                                <tr>
                                    <td>Menos o total de respostas incorretas</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "menos_total_respostas_incorretoas_linguagem_expressiva") }}" min="0" type="number" step="0.1" name="menos_total_respostas_incorretoas_linguagem_expressiva" /></td>
                                </tr>

                                <tr>
                                    <td>Linguagem Expressiva – Escore Bruto</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "linguagem_expressiva") }}" min="0" type="number" step="0.1" name="linguagem_expressiva" /></td>
                                </tr>






                                <tr>
                                    <td style="width: 25%;padding-top: 2.75rem;font-size: 25px; border-right: 2px solid; " rowspan="5">Linguagem Global</td>
                                </tr>

                                <tr>
                                    <td>Escore padrão da Linguagem Receptiva</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "escore_padrao_linguagem_receptiva") }}" min="0" type="number" step="0.1" name="escore_padrao_linguagem_receptiva" /></td>
                                </tr>

                                <tr>
                                    <td>Mais (+) o Escore padrão da Linguagem Expressiva</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "mais_escore_padrao_linguagem_expressiva") }}" min="0" type="number" step="0.1" name="mais_escore_padrao_linguagem_expressiva" /></td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "total_linguagem_global") }}" min="0" type="number" step="0.1" name="total_linguagem_global" /></td>
                                </tr>

                                <tr>
                                    <td>Escore padrão da Linguagem Global</td>
                                    <td><input required style="display: inherit; margin: auto; padding: 0;" value="{{ g_old($avaliacao, "escore_padrao_linguagem_global") }}" min="0" type="number" step="0.1" name="escore_padrao_linguagem_global" /></td>
                                </tr>

                            </tbody>
                        </table>


                        <hr class="hr_form">
                        <h3>Observação do comportamento:</h3><br>
                        <textarea required placeholder="Descrição breve dos comportamentos: auditivo, visual, atencional e o tempo necessário para responder as tarefas (imediato, médio, lento)" class="textareas_form" id="observacao_comportamento" name="observacao_comportamento" rows="4" cols="50" style="">{{ g_old($avaliacao, "observacao_comportamento") }}</textarea>

                        <br>
                        <br>
                        <br>

                        <h3>Escolha o questionário</h3><br>
                        <select name="seletor_questionario" id="seletor_questionario">
                            <option value="nenhum_bloco"        >Nenhum</option>
                            <option value="bloco_12_17_meses"   >12 a 17 meses</option>
                            <option value="bloco_1e6_1e11_meses">1 ano e 6 m. até 1 ano e 11 m.</option>
                            <option value="bloco_2_2e5_meses"   >2 anos até 2 anos e 5 meses</option>
                            <option value="bloco_2e6_2e11_meses">2 anos e 6 m. até 2 anos e 11 m.</option>
                            <option value="bloco_3_3e5_meses"   >3 anos até 3 anos e 5 meses</option>
                            <option value="bloco_3e6_3e11_meses">3 anos e 6 m. até 3 anos e 11 m.</option>
                            <option value="bloco_4_4e5_meses"   >4 anos até 4 anos e 5 meses</option>
                            <option value="bloco_4e6_4e11_meses">4 anos e 6 m. até 4 anos e 11 m.</option>
                            <option value="bloco_5_5e11_meses"  >5 anos até 5 anos e 11 meses</option>
                            <option value="bloco_6_6e11_meses"  >6 anos até 6 anos e 11 meses</option>
                        </select>



                        <br>

                        <hr class="hr_form">
                        <h3>Questionário</h3><br>
                        <div id="container_blocos_questionarios_ativo"></div>

                        <input type="submit" value="Salvar avaliação">

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

<script src="{{ asset('js/ava_fono.js') }}" defer></script>
<link href="{{ asset('css/ava_fono.css') }}" rel="stylesheet">

<?php get_header(); ?>
<section class="bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <div>
                    <?php
                        $title = get_field('title');
                        if($title) { ?>
                            <h1 class="text-white fw-light display-4"><?php echo $title ?></h1>
                        <?php } else {
                            echo '<h1 class="text-white fw-light display-4">Insira um título</h1>';
                        } 
                    ?>
                    <?php
                        $desc = get_field('descricao');
                        if($desc) { ?>
                            <p class="lead text-white"><?php echo $desc ?></p>
                        <?php } else {
                            echo '<p class="lead text-white">Insira uma descrição</p>';
                        } 
                    ?>
                    <form action="" class="mt-4 mb-4">
                        <div class="input-group input-group-lg">
                            <input type="text" name="" id="" placeholder="Informe seu e-mail" class="form-control">
                            <button type="button" class="btn btn-lg btn-primary">Cadastre-se</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="<?php echo get_template_directory_uri() . '/img/capa-mulher.png'; ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="caixa border-bottom my-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="align-self-center">
                <?php
                        $title1 = get_field('titulo_secao_1');
                        if($title1) { ?>
                            <h2 class="display-6"><?php echo $title1 ?></h2>
                        <?php } else {
                            echo '<h2 class="display-6">Insira um título</h2>';
                        } 
                    ?>
                    <?php
                        $desc1 = get_field('desc_secao_2');
                        if($desc1) { ?>
                            <p class="lead"><?php echo $desc1 ?></p>
                        <?php } else {
                            echo '<p class="lead">Insira uma descrição</p>';
                        } 
                    ?>
                    <a href="" class="btn btn-primary">Saiba mais</a>
                    <!-- <h2 class="display-6">Saiba para onde vai o seu dinheiro</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et impedit recusandae ut enim perferendis, unde eligendi natus! Vel voluptatum at culpa veritatis. Explicabo, voluptatibus totam nam quisquam voluptate iusto!</p>
                     -->
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() . '/img/saiba.png' ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="caixa border-bottom my-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() . '/img/juros.png' ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex">
                <div class="align-self-center">
                    <h2 class="display-6">Pare de pagar juros e economize</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et impedit recusandae ut enim perferendis, unde eligendi natus! Vel voluptatum at culpa veritatis. Explicabo, voluptatibus totam nam quisquam voluptate iusto!</p>
                    <a href="" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="caixa border-bottom my-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/img/facil.png' ?>" alt="" class="img-fluid">
                <h4 class="display-6">Fácil de usar</h4>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam blanditiis vel aperiam, amet voluptas debitis quidem. Quos rerum ut corporis debitis earum. Minima, cumque? Consectetur eum a reiciendis praesentium unde!</p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/img/economize.png' ?>" alt="" class="img-fluid">
                <h4 class="display-6">Economize seu tempo</h4>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam blanditiis vel aperiam, amet voluptas debitis quidem. Quos rerum ut corporis debitis earum. Minima, cumque? Consectetur eum a reiciendis praesentium unde!</p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/img/suporte.png' ?>" alt="" class="img-fluid">
                <h4 class="display-6">Suporte amigo</h4>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam blanditiis vel aperiam, amet voluptas debitis quidem. Quos rerum ut corporis debitis earum. Minima, cumque? Consectetur eum a reiciendis praesentium unde!</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
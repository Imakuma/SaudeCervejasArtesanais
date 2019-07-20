
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Vamos lá!</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Entrar</a></li>
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Contato</a></li>

                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Categorias</h5>
                    <ul>
                        <li><a href="#">Todas as Cervejas</a></li>
                        <li><a href="#">Leilão</a></li>
                        <li><a href="#">Compra Coletiva</a></li>
                        <li><a href="#">Kits</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 myCols">
                    <h5 class="mb-4">Inscreva-se para receber as novidades</h5>
                    <div class="form-group d-flex justify-content-center align-items-center my-auto">
                        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                            placeholder="Email">
                        <button class="btn m-1">Enviar</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="google"><i class="fab fa-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Saúde!!! </p>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="assets/OwlCarousel2-2.3.4/docs_src/assets/vendors/highlight.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                margin: 20,
                items: 1,
                nav: false,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })


            //dropdown carrinho
            $('.navbar-top-cart-item').on("click", function (e) {
                e.stopPropagation();
                e.preventDefault();
            });

            //quantidade do produto carrinho
            $('.add').click(function () {
                if ($(this).prev().val() < 1000) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.sub').click(function () {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
            });
            $("#menu-close").click(function (e) {
                e.preventDefault();
                $("#sidebar-wrapper").toggleClass("active");

            });
            $(".toggle-btn").click(function (e) {
                e.preventDefault();
                $("#sidebar-wrapper").toggleClass("active");
                $("body").toggleClass("lock-scroll");

            });
            $('.toggle-btn').click(function (event) {
                $("#navbarSupportedContent").toggleClass('collapse');
                $(".toggle-btn-bar1").toggleClass("toggle-btn-bar1-cross");
                $(".toggle-btn-bar2").toggleClass("toggle-btn-bar2-cross");
                $(".toggle-btn-bar3").toggleClass("toggle-btn-bar3-cross");
                event.stopPropagation();
            });


        });
    </script>

</body>

</html>
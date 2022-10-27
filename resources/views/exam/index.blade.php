@include('layouts.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary  sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="row mt-4 mb-2">
                <div class="col text-center">

                    <h3 class="text-light">
                        <i class="fas fa-book-open"></i>
                        {{ config('app.name') }}
                    </h3>
                </div>
            </div>

            <li class="nav-item">
                <table class="m-3">
                    <tr>
                        <?php
                    $page_button = 1;
                    for ($i = 1; $i <= 50; $i++) : ?>
                        <td style='text-align: center;'>
                            <button class='jump btn btn-block btn-outline-light' id='button_{{ $page_button }}'
                                name='$page_button' type='button'>
                                <?= $page_button ?>
                            </button>
                        </td>
                        <?php
                        if ($page_button % 5 == 0) {
                            echo "</tr>";
                            echo "<tr>";
                        }
                        $page_button++;
                    endfor ?>
                    </tr>
                </table>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="ml-auto mr-2 mt-auto mb-auto">
                        <h5>
                            10:10:10s
                        </h5>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Soal. 1 - Wawancara</h6>
                        </div>
                        <div class="card-body">
                            <p class="text-justify ">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Repudiandae quas corporis sapiente, facere aut aliquam reprehenderit repellat quisquam
                                perferendis blanditiis doloribus eius debitis dolor iusto temporibus soluta officiis
                                quod. Cumque commodi porro et blanditiis eligendi ipsa officiis facere praesentium
                                tenetur magni quas voluptatibus, quae explicabo, ea consequatur impedit sunt fugiat
                                tempore id illum, maxime eum! Cum consequuntur voluptatem aspernatur! Eligendi laborum
                                doloribus debitis, repudiandae, vel nobis porro quia repellendus, laudantium
                                reprehenderit excepturi. Officiis temporibus corrupti voluptatem inventore quia. Maiores
                                similique aspernatur ducimus repellat asperiores dolorum recusandae atque, libero
                                repellendus, tenetur modi aliquid perspiciatis, cumque ut ab eos quasi suscipit. Dolore.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quibusdam eum molestiae
                                earum necessitatibus, nam amet nisi doloremque harum ipsam dolorum architecto eaque qui
                                iure dignissimos ab nostrum sapiente eos!</p>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi" id="opsiA">
                                <label class="form-check-label" for="opsiA">
                                    A.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi" id="opsiB">
                                <label class="form-check-label" for="opsiB">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi" id="opsiC">
                                <label class="form-check-label" for="opsiC">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi" id="opsiD">
                                <label class="form-check-label" for="opsiD">
                                    Default radio
                                </label>
                            </div>

                            <div class="text-center mt-3 mb-3">
                                <button type="submit" class="btn btn-primary mr-4"><i class="fa fa-arrow-left"></i>
                                    Soal Sebelumnya</button>
                                <button type="submit" class="btn btn-primary">Soal Berikutnya <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <div>
                <div class="col-12">
                    <hr class="sidebar-divider">
                    <div class="row">
                        <div class="col-6 ml-3">
                            <span>ID Pengguna: 12345</span>
                        </div>
                        <div class="col">
                            <span>Nama: Andi Budi Chandra</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 ml-3">
                            <span>Kode Tes: 18</span>
                        </div>
                        <div class="col">
                            <span>Nama Tes: REG-L1(20/10/2022)</span>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                </div>

            </div>
            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->
    </div>
    @include('layouts.tail')

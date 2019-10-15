<?php $this->load->view('layout/header_forum'); ?>


    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 col-md-8">
                    <div class="pull-left"><a href="#" class="prevnext"></a></div>
                    <div class="pull-left"></div>
                    <div class="pull-left"><a href="#" class="prevnext last"></a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php foreach ($data as $dt) {
                        # code...
                        ?>

                    <!-- POST -->
                    <div class="post">
                        <div class="wrap-ut pull-left">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="<?php echo base_url();?>assets2/images/avatar.jpg" alt="" />
                                    <div class="status green">&nbsp;</div>
                                </div>

                                <div class="icons">
                                    <img src="<?php echo base_url();?>assets2/images/icon1.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="posttext pull-left">
                                <h2><a href="<?php echo base_url().'index.php/forum/select/'.$dt->id;?>"><?php echo $dt->judul ?></a></h2>
                                <p><?php echo substr($dt->konten, 0, 150) ?>...</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfo pull-left">
                            <div class="comments">
                                <div class="commentbg">
                                    560
                                    <div class="mark"></div>
                                </div>

                            </div>
                            <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                            <div class="time"><i class="fa fa-clock-o"></i> <?php echo $dt->date ?></div>                                    
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- POST -->
                    <?php
                    } ?>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebarblock">
                        <h3>Peraturan Forum</h3>
                        <div class="divline"></div>
                        <div class="blocktxt text-justify">
                                <p>1. Wajib menghargai sesama anggota baik dalam posting topik/thread ataupun komentar.</p>
                                <p>2. Selalu menggunakan kata yang baik.</p>
                                <p>3. Dilarang memposting ataupun menambahkan attachment hal-hal yang berbau pornografi.</p>
                                <p>4. Dilarang memposting ataupun menambahkan attachment hal-hal yang berbau SARA</p>
                        </div>
                    </div>

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Kategori</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <ul class="cats">
                                <li><a href="#">Pemerintahan Cerdas <span class="badge pull-right">62</span></a></li>
                                <li><a href="#">Branding Cerdas <span class="badge pull-right">21</span></a></li>
                                <li><a href="#">Ekonomi Cerdas <span class="badge pull-right">80</span></a></li>
                                <li><a href="#">Pola Hidup Cerdas <span class="badge pull-right">75</span></a></li>
                                <li><a href="#">Masyarakat Cerdas <span class="badge pull-right">58</span></a></li>
                                <li><a href="#">Lingkungan Cerdas <span class="badge pull-right">21</span></a></li>
                                <li><a href="#">Evaluasi Smart City <span class="badge pull-right">32</span></a></li>
                                <li><a href="#">Riset Smart City <span class="badge pull-right">22</span></a></li>
                                <li><a href="#">Smart District <span class="badge pull-right"></span></a></li>
                                <li><a href="#">Pameran <span class="badge pull-right">30</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Polling Minggu Ini</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <p>Which game you are playing this week?</p>
                            <form action="#" method="post" class="form">
                                <table class="poll">
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                    Call of Duty Ghosts
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt1" type="radio" name="opt" value="1">  
                                            <label for="opt1"></label>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                    Titanfall
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt2" type="radio" name="opt" value="2" checked>  
                                            <label for="opt2"></label>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    Battlefield 4
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt3" type="radio" name="opt" value="3">  
                                            <label for="opt3"></label>  
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <p class="smal">Voting ends on 19th of October</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12">
                    <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                    <div class="pull-left">
                        <ul class="paginationforum">
                            <li class="hidden-xs"><a href="#" class="active">1</a></li>
                            <li class="hidden-xs"><a href="#">2</a></li>
                            <li class="hidden-xs"><a href="#">3</a></li>
                            <li class="hidden-xs"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#" class="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                            <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                            <li><a href="#">15</a></li>
                        </ul>
                    </div>
                    <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


    </section>
   
<?php $this->load->view('layout/footer_forum'); ?>
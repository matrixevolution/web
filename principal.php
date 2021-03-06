<?php
require('php_lib/include-pagina-restringida.php'); //el incude para vericar que estoy logeado. Si falla salta a la página de index.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistema Venado 2.0</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="robots" content="index,follow,noarchive">
        <link rel="stylesheet" href="css/a.css">
    </head>
    <body>
        <div id="a">
            <header>
                <a href="principal.php" title="Ir al Inicio"><strong>Sistema</strong> Venado 2.0</a>
                <p>Punto de Venta en Linea</p>
            </header>
            <div id="b">
                <article>
                    <h1>Bienvenido!</h1>
                    <img src="images/image-1.png" alt="#"/>
                    <h2>Punto de Venta</h2>
                    <p>Hola bienvenido al sistema de papeleria de venado donde podras encontrar de manera mas facil materiales de papeleria gracias por escojer nuestro servicio.</p>
                    <h3>Let the Show Begin - Pre and Code</h3>
                    <p>This is how it looks if you use <code>pre</code> and <code>code</code> together, for example to highlight and nicely markup a piece of code:</p>
                    <pre><code>pre {<br /> font-size : 12px;<br /> background : #F0F0F0;<br />}</code></pre>
                    <h3>Example Blockquote</h3>
                    <p>If you want to quote somebody, you can use this perfectly semantic example for a blockquote:</p>
                    <cite>Jean-Luc Picard</cite>
                    <blockquote cite="https://secure.wikimedia.org/wikiquote/en/wiki/Jean-Luc_Picard" title="https://secure.wikimedia.org/wikiquote/en/wiki/Jean-Luc_Picard"> 					<!-- cite reference is purely for semantic, correct resourcing, purposes -->
                        With the first link, the chain is forged. The first speech censored, the first thought forbidden, the first freedom denied, chains us all irrevocably.
                    </blockquote>
                    <h3>Examples Alerts, Notice  &amp; Confirmation</h3>
                    <p>These sample styles for alerts and notices are useful if you want to use the template in content management systems.</p>
                    <p class="highlight-1"><strong>Alert:</strong> This is how an alert looks like.</p>
                    <p class="highlight-2"><strong>Notice:</strong> This is how a notice looks like.</p>
                    <p class="highlight-3"><strong>Confirmation:</strong> This is how a confirmation looks like.</p>
                    <h3>Example Table</h3>
                    <p>The following is the design for a table. The style is simple and user-friendly. Some of the effects were made with CSS3.</p>
                    <table>
                        <caption>Mini HTML5 Reference Guide</caption>
                        <tbody>
                            <tr>
                                <th>Tag</th>
                                <th>Info</th>
                                <th>Attributes</th>
                            </tr>
                            <tr>
                                <td>&lt;abbr&gt;</td>
                                <td>abbreviation</td>
                                <td>global attributes**</td>
                            </tr>
                            <tr>
                                <td>&lt;area&gt;</td>
                                <td>in an image map</td>
                                <td> alt, coords, href, hreflang, media, ping, rel, shape, target, type</td>
                            </tr>
                            <tr>
                                <td>&lt;article&gt;</td>
                                <td>article/ content</td>
                                <td>global attributes**</td>
                            </tr>
                            <tr>
                                <td>&lt;aside&gt;</td>
                                <td>sidebar</td>
                                <td>global attributes**</td>
                            </tr>
                            <tr>
                                <td>&lt;audio&gt;</td>
                                <td>sound content</td>
                                <td>autobuffer, autoplay, controls, loop, src</td>
                            </tr>
                            <tr>
                                <td>&lt;b&gt;</td>
                                <td>bold text</td>
                                <td>global attributes**</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Example hCalendar</h3>
                    <p>The following is a definition list in combination with the hCalendar microformat. </p>
                    <dl class="vevent">
                        <dt class="dtstart"><abbr title="2010-11-18" class="dtstart">11-18-2010</abbr></dt>
                        <dd class="summary">Conference Name</dd>
                        <dd><a href="#" class="url">http://www.conference-website.com/</a></dd>
                        <dd class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec eleifend diam. Fusce lobortis odio ac sem scelerisque sed iaculis purus ornare.</dd>
                    </dl>
                    <h3>Example Video</h3>
                    <video src="movie.ogg" controls>your browser does not support the video tag</video>
                    <h3>Example Audio</h3>
                    <p>You can put your Audio-Files here...</p>
                    <audio src="file.ogg" controls>your browser does not support the audio tag</audio>
                    <h3>Example Lists</h3>
                    <p>Two different kinds of lists were styled: Ordered lists (ol) and unordered (ul) lists.</p>
                    <ol>
                        <li>This is</li>
                        <li>The Ordered</li>
                        <li>Listing</li>
                    </ol>
                    <ul>
                        <li>This is</li>
                        <li>The Unordered</li>
                        <li>Listing</li>
                    </ul>
                    <h3>Example Form</h3>
                    <p>This is how a form will look like in this template.</p>
                    <form action="#">
                        <label>Name</label>
                        <input name="#" type="text" value="Your Name">
                        <label>Email</label>
                        <input name="#" type="text" value="Your Email">
                        <label>Your Comments</label>
                        <textarea>This is a Comment...</textarea>
                        <br>
                        <input class="button" type="submit">
                    </form> 
                    <section class="meta">
                        <p>Author: <a href="http://jabz.net/contact/jonas-jacek">Jonas Jacek</a> | Date: 2010-01-21 | Comments: <a href="#">7</a></p>
                        <p>Tags: <a href="#" rel="tag">quisquam</a>, <a href="#" rel="tag">Tags</a>, <a href="#" rel="tag">dolorem</a> <a href="#" rel="tag">Tags</a>, <a href="#" rel="tag">Tags</a></p>
                    </section>
                </article>
                <aside>
                    <?php include("includes/menu_principal.php"); ?>
                    <h4>Acerca del Sistema</h4>
                    <div id="c">
                        <img src="images/jonas-jacek.png" alt="Jonas Jacek">
                        <p>Sistema Venado 2.0</p>
                        <p>Hola que hace?</p>
                        <p>Venadeando y tu k haces?</p>
                    </div>
                    <h4>Galeria de Productos</h4>
                    <ul class="gallery">
                        <li><a href="index.html"><img src="images/img1.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img2.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img3.png" alt="#"/></a></li>
                    </ul>
                    <ul class="gallery">
                        <li><a href="index.html"><img src="images/img4.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img5.png" alt="#"/></a></li>
                        <li><a href="index.html"><img src="images/img6.png" alt="#"/></a></li>
                    </ul>
                    <h4>Promociones</h4> 
                    <div class="adspace"> 
                        <a href="http://jabz.net/" rel="me"><img src="images/jabz-logo.png" alt="Jabz Internet Marketing GmbH" title="Jabz Internet Marketing GmbH"/></a> 
                    </div>
                    <h4>Example Blogroll</h4>
                    <ul>
                        <li><a href="http://jabz.net/">Jabz Internet Marketing GmbH</a></li>
                        <li><a href="http://jabz.net/contact/jonas-jacek">Jonas Jacek</a></li>
                        <li><a href="http://www.w3.org/">World Wide Web Consortium</a></li>
                        <li><a href="http://www.getfirefox.com/">Firefox Web Browser</a></li>
                    </ul>
                    <h4>Example Tag Cloud</h4>
                    <ul id="tagcloud">
                        <li class="tagcloudsize-1"><a href="#">Lorem</a></li>
                        <li class="tagcloudsize-2"><a href="#">Ipsum</a></li>
                        <li class="tagcloudsize-3"><a href="#">Dolor</a></li>
                        <li class="tagcloudsize-2"><a href="#">Sit Amet</a></li>
                        <li class="tagcloudsize-1"><a href="#">Consectetur</a></li>
                    </ul> 
                </aside>
            </div>
            <footer>
                <p>2013 © Venado Papeleria y Merceria, S.A. de C.V. Todos los Derechos Reservados.</p>
            </footer>
        </div>
    </body>
</html>

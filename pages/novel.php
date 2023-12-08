<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bootswatch/bootstrap.min.css" rel="stylesheet">
    <title>My Website</title>
</head>

<body style="background-color: whitesmoke;">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top">
        <div class="container-fluid">
            <a style=" font-size: xx-large; color:white; text-decoration-line:none;"
                class="d-inline-block align-text-top">
                <img src="img/Imagen1.jpg" alt="icon" width="50" height="54">
                Elleyis
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                </ul>
                <span class="navbar-text">
                    <a class="btn btn-secondary my-sm-0" role="button" href="../index.html">Home</a>
                    <a class="btn btn-secondary my-sm-0" role="button" href="novel.php">Read a Manga</a>
                    <a class="btn btn-secondary my-sm-0" role="button" href="video.html">Watch a video</a>
                </span>
            </div>
        </div>
    </nav>
    <div class="fondo">
        <div class="contenedor">
            <h1>Read this interesting Manga</h1>
            <h2 class="margin"><b>"La Emperatriz Divorciada"</b><br>Discover a new world!</h2>
            <h3 class="margin">Please, select the chapter below:</h3>
            <div class="Row">
                <form method="post" class="mb-3">
                    <div class="row">
                        <div class="col-3">
                            <button type="submit" class="btn btn btn-outline-success form-control"
                                name="cap1-10">Capitulo 01 - 10</button>
                            <button type="submit" class="btn btn-outline-success form-control" name="cap25-30">Capitulo
                                41 - 50</button>
                            <button type="submit" class="btn btn-outline-success form-control" name="cap81-85">Capitulo
                                81 - 85</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap103-108">Capitulo
                                103 - 108</button>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success form-control" name="cap11-15">Capitulo
                                11 -
                                20</button>
                            <button type="submit" class="btn btn-outline-success form-control" name="cap31-35">Capitulo
                                51
                                -
                                60</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap86-90">Capitulo 86
                                -
                                90</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap109-114">Capitulo
                                109
                                -
                                114</button>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success form-control" name="cap16-20">Capitulo
                                21 -
                                30</button>
                            <button type="submit" class="btn btn-outline-success form-control" name="cap36-40">Capitulo
                                61 -
                                70</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap91-96">Capitulo
                                91 -
                                96</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap115-118">Capitulo
                                115 -
                                118</button>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-outline-success form-control" name="cap21-24">Capitulo
                                31
                                -
                                40</button>
                            <button type="submit" class="btn btn-outline-success form-control" name="cap41-44">Capitulo
                                71
                                -
                                80</button>
                            <button type="submit" class="btn btn-outline-info form-control" name="cap97-102">Capitulo 97
                                -
                                102</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['cap1-10'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[01 - 10] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap11-15'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[11 - 20] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap16-20'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[21 - 30] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap21-24'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[31 - 40] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap25-30'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[41 - 50] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap31-35'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[51 - 60] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap36-40'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[61 - 70] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap41-44'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[71 - 80] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap81-85'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[81 - 85] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap86-90'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[86 - 90] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap91-96'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[91 - 96] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap97-102'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[97 - 102] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap103-108'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[103 - 108] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap109-114'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[109 - 114] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
            } else if (isset($_POST['cap115-118'])) {
                echo "<embed src='../LA EMPERATRIZ DIVORCIADA/[115 - 118] La Emperatriz Se Volvio A Casar.pdf#toolbar=0' type='application/pdf' width='80%' height='500px'/>";
                echo "<h3>
                        <p>&nbsp</p>
                        <p>&nbsp</p>
                        <p>&nbsp</p>
                        Si quieres continuar leyendo esta historia, busca la obra en
                        <A href='https://www.webtoons.com/es/fantasy/the-remarried-empress/list?title_no=2246'>Webtoon</A>
                    </h3>";
            }
            ?>
        </div>
    </div>
    <footer class="bg-secondary">
        <div style="text-align: center; color: white; padding-top: 10vh; padding-bottom: 10vh;">
            Website created by Elleyis Company ©
        </div>
    </footer>
</body>

</html>
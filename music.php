<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bring Me The Horizon | Official Website | POST HUMAN: NeX Gen</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" type="image/png" href="./assest/kool.jpg" sizes="32x32">
<body>
<section class="flex justify-between">
    <div class="w-72 group flex-1">
        <div class="relative overflow-hidden flex justify-start items-start mt-11 ml-12">
            <img src="./assest/kool.jpg" alt="Kool-Aid" class="object-scale-down h-48 w-96 items-start justify-start transition-transform transform hover:scale-90">
            <div class="absolute h-full w-full bg-white/20 flex items-start justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <div class="items-start justify-center">
                <?php
                    $koneksi = mysqli_connect("localhost", "root", "", "event-list");
                    if (mysqli_connect_errno()) {
                        echo "Koneksi database gagal: " . mysqli_connect_error();
                        exit();
                    }
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    $query = "SELECT * FROM `music`";
                    $result = mysqli_query($koneksi, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                        <p class="mb-px text-xl mt-24 text-center"><?php echo $row['song'];?></p>
                                        <p class="mb-px text-xs"><?php echo $row['release'];?></p>
                                    <div class="">
                                        <button class="bg-white hover:bg-black text-black hover:text-white py-1 px-4 border w-full border-black transition duration-300 ease-in-out item-center justify-center my-20">
                                            <?php $row['spotify_link'];
                                            echo "<a href= $row[spotify_link] target=_blank>LISTEN</a>";
                                            ?>
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }

                            mysqli_close($koneksi);
                            ?>
                </div>
            </div>       
        </div>
    </div>
</section>
<section class="bg-[url('./assest/background.jpg')] bg-auto bg-center">
            <div class="font-custom">
                <div class="flex flex-col items-end uppercase mr-12 mt-11 text-8xl" > 
                        <a href="./index.php">
                        <button class="no-line-through uppercase">home</button>
                        </a>
                        <a href="./live.php">
                            <button class="no-line-through uppercase active:line-through">live</button>
                        </a>
                        <button class="no-line-through uppercase">videos</button>
                        <a href="./music.php">
                            <button class="no-line-through uppercase">music</button>
                        </a>
                        <button class="no-line-through uppercase">updates</button>
                        <a href="https://www.horizonsupply.co/" target="_blank">
                            <button class="no-line-through uppercase">merch</button>
                        </a>
                        <a href="https://shop.bmthofficial.com/?utm_source=Website&utm_medium=Organic&utm_content=Site%20Navigation" target="_blank">
                            <button class="no-line-through uppercase">store</button>
                        </a>
                        <button class="no-line-through uppercase">follow</button>
                </div>
            </div>
        </div>
    </section>
<script src="./music.js">
</script>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bring Me The Horizon | Official Website | POST HUMAN: NeX Gen</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" type="image/png" href="./assest/kool.jpg" sizes="32x32">
    <link href="live.js">
    <body>
        <div class="font-custom">
            <div class="flex justify-between">
                <div class="flex-1">
                    <div class=" flex justify-start items-start mt-11 ml-12 ">

                        <ul id="event-list" class="flex flex-col items-start">
                            <h4 class="uppercase mb-10 mt-1 text-2xl">tour dates</h4>
                            <?php
                            $koneksi = mysqli_connect("localhost", "root", "", "event-list");

                            if (mysqli_connect_errno()) {
                                echo "Koneksi database gagal: " . mysqli_connect_error();
                                exit();
                            }
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);

                            $query = "SELECT * FROM `tour-date`";
                            $result = mysqli_query($koneksi, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-sm mb-11">
                                        <p class="mb-px"><?php echo $row['date'];?></p>
                                        <p class="mb-px"><?php echo $row['event-name'];?></p>
                                        <p class=""><?php echo $row['place'];?></p>
                                    </div>
                                    <div class="flex justify-end items-end">
                                        <button class="bg-transparent hover:bg-black text-lg text-black hover:text-white py-2 px-8 border border-black transition duration-300 ease-in-out hover:border-black mb-10 ml-12">
                                            <?php $row['ticket_link'];
                                            echo "<a href= $row[ticket_link] target=_blank>GET TICKETS</a>";
                                            ?>
                                        </button>
                                    </div>
                                </div>
                            <?php
                            }

                            mysqli_close($koneksi);
                            ?>
                        </ul>   
                    </div>    
                </div>
                <div class="justify-end fixed">
                    <div class="flex flex-col items-end justify-end uppercase mt-11 mr-12 text-8xl"> 
                            <a href="./index.php">
                                <button class="no-line-through uppercase">home</button>
                            </a>
                            <button class="no-line-through uppercase active:line-through">live</button>
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
            </div>
        </div>
            
    </body>
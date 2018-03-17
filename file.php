<?php
                        $functionadd="SELECT id,name,type,Openness,Conscientiousness,Extraversion,Agreeableness,Neuroticism FROM name";
                        $functionwindow = mysql_query($functionadd,$link);
                        $functionwindowuse = mysql_query($functionadd,$link);
                        $num2=mysql_num_rows($functionwindow);
                        
                        while($q < $num2){
                        $row0 = mysql_fetch_array($functionwindowuse);
                        echo 'function a'.$row0['id'].'(){';
                        echo 'window.myRadar = new Chart(document.getElementById("myChart'.$row0['id'].'").getContext("2d")).Radar(radarChartData'.$row0['id'].', {';
                                echo 'responsive: true';
                            echo '});';
                        echo '}';
                        $q++;
                        }
                        ?>
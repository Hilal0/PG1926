function islem()
        {
            var sayi = document.getElementById("sayi").value;
            para = Number(sayi);
            var birkr = 0;
            var beskr = 0;
            var onkr = 0;
            var yirmibeskr = 0;
            var ellikr = 0;
            var birTL = Math.floor(para);
            var paraustu = para-birTL;
            if(paraustu >= 0.5){
                ellikr = 1;
                paraustu = paraustu - 0.5;
            }
            if(paraustu >= 0.25){
                yirmibeskr = 1;
                paraustu = paraustu - 0.25;
            }
            if(paraustu >= 0.1){
                if(paraustu >=0.2){
                    onkr = 2;
                    paraustu = paraustu - 0.20;
                }
                else{
                    onkr = 1;
                    paraustu  = paraustu - 0.1;
                }
            }
            if(paraustu  >= 0.05){
                beskr = 1;
                paraustu  = paraustu  - 0.05;
            }
            birkr = Math.round(paraustu *100);
            document.getElementById("son").innerHTML = "Paraüstü "+birTL+" TL - "+ellikr+" adet 50 kr. - "+yirmibeskr+
            " adet 25 kr. - "+onkr+" adet 10 kr. - "+beskr+" adet 5 kr. - "+birkr+" adet 1 kr. olarak döner.";
        }
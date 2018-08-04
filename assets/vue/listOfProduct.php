<?php 
    $listOfBarCodes = [];
    $listOfProducts = [
        "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, quidem libero, aliquam expedita quos blanditiis suscipit hic similique sequi corrupti non. Dignissimos culpa illo dolore maxime recusandae, vero blanditiis fuga.",
        "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, quidem libero, aliquam expedita quos blanditiis suscipit hic similique sequi corrupti non. Dignissimos culpa illo dolore maxime recusandae, vero blanditiis fuga.",
        "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, quidem libero, aliquam expedita quos blanditiis suscipit hic similique sequi corrupti non. Dignissimos culpa illo dolore maxime recusandae, vero blanditiis fuga.",
        "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, quidem libero, aliquam expedita quos blanditiis suscipit hic similique sequi corrupti non. Dignissimos culpa illo dolore maxime recusandae, vero blanditiis fuga."
    ];
    for($i = 0; $i < 10; $i++){
        $barcode = "2";

        for($num = 0; $num < 12; $num++){
            $barcode .= round(rand(0, 9));
        }

        array_push($listOfBarCodes, $barcode);
    }
?>
<div class="container">
    <ul>
    <?php 
        $i = 0;
        foreach($listOfBarCodes as $barcode):
        $i++;
        ?>
        <li class="row">
            <div class="product_info eight columns">
                <p>
                <?php if(isset($listOfProducts[$i])){
                    echo $listOfProducts[$i];
                }
                else { ?>
                    <a href="/?page=encoding">Ajouter un nouveau produit</a>
                <?php } ?>
                </p>
            </div>
            <div class="barcode four columns">
                <?= $barcode; ?>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
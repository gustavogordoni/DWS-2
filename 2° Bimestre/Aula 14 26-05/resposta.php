          <p class = "text-end">Hoje é dia <strong><?= $data?></strong> e agora são <strong><?= $hora?></strong></p>

          <h5>Texto informado</h5>
            <p>
                <?php                
                  $cores = array
                    ( "verde",
                      "vermelho",
                      "azul",
                      "Verde",
                      "Vermelho",
                      "Azul"
                    );

                  $span = array
                  ( "<span class = 'text-success'><strong>". $cores[0] ."</strong></span>",
                    "<span class = 'text-danger'><strong>". $cores[1] ."</strong></span>",
                    "<span class = 'text-primary'><strong>". $cores[2] ."</strong></span>",
                    "<span class = 'text-success'><strong>". $cores[3] ."</strong></span>",
                    "<span class = 'text-danger'><strong>". $cores[4] ."</strong></span>",
                    "<span class = 'text-primary'><strong>". $cores[5] ."</strong></span>"
                  );

                echo str_replace($cores, $span, $text);
              
                /*
               
                  $verde = strpos($text, "verde");
                  $vermelho = strpos($text, "vermelho");
                  $azul = strpos($text, "azul");

                  $cores = array($verde, $vermelho, $azul);

                  $span = array(
                      "<span class='text-success'>" . $cores[0] . "</span>",
                      "<span class='text-danger'>" . $cores[1] . "</span>",
                      "<span class='text-primary'>" . $cores[2] . "</span>"
                  );

                  echo str_replace($cores, $span, $text);
                  */                       
              ?>
            </p>
          <hr>
          
          <h5>Texto em MAIÚSCULO</h5>
            <p>
            <?php echo strtoupper($text);?>              
            </p>
          <hr>

          <h5>Existe a string "web"?</h5>
            <p>
            <?php
              $web = stripos($text, "web");
              
              if ($web !== false && $web >= 0) {
                  echo "SIM";
              } else {
                  echo "NÃO";
              }               
            ?> 
            </p>  
          <hr>

          <h5>O texto informdo tem: </h5>
            <p>
              <?php echo strlen($text) . " caracteres";?>
            </p>
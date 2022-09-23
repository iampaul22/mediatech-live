<?php /* Template Name: test_api */ ?>
<?php

$curl = curl_init();
$str = $_GET['s'];
$title = $_GET['s'];
//$title =  preg_replace('/[^A-Za-z0-9]/', '', $str);
//$title = $_GET['s'];
$title = rawurlencode ($str); 
curl_setopt_array($curl, array(
 // CURLOPT_URL => 'https://dfffbe18444d4d5ea037b3a3225c94ec.ent-search.us-central1.gcp.cloud.es.io/api/as/v1/engines/turntable-search-engine/search?query=podcasting%20investors',
 CURLOPT_URL => 'https://dfffbe18444d4d5ea037b3a3225c94ec.ent-search.us-central1.gcp.cloud.es.io/api/as/v1/engines/turntable-search-engine/search?query='.$title,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "query": "'. $title .'",
    "facets": {
        "location": {
            "type": "value",
            "size": 30
        },
        "type": {
            "type": "value",
            "size": 30
        },
        "organization": {
            "type": "value",
            "size": 30
        },
        "role": {
            "type": "value",
            "size": 30
        },
        "deal_size": {
            "type": "value",
            "size": 30
        },
        "stage": {
            "type": "value",
            "size": 30
        },
        "member": {
            "type": "value",
            "size": 30
        }
    },
    "result_fields": {
        "country": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "organization_url": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "role": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "regions": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "city": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "facebook": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "description": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "linkedin": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "type": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "crunchbase": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "twitter": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "deso": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "stage": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "organization": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "name": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "member": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "mediatech": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "angel": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "location": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "state": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "interests": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "signal": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "investment_portfolio": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "deal_size": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        },
        "id": {
            "raw": {},
            "snippet": {
                "size": 100,
                "fallback": true
            }
        }
    },
    "page": {
        "size": 136,
        "current": 1
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer search-f5uwnxwzyrstr75b6nb1ysjc',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

//curl_close($curl);
//echo $response;
$decoded_response_object = json_decode($response);
// foreach ($decoded_response_object->results as $value) {
//     echo '<pre>';
//     print_r($value);
//     echo '</pre>';

// }
//echo $title;
    // echo '<pre>';
    // print_r($decoded_response_object);
    // echo '</pre>';
?>

<ul id="posts-streamm" class="csm_podcast item-list posts-list bp-list bp-search-results-list">
    <span class="csm_title">People<?php //echo $title; ?></span>
    <?php foreach ($decoded_response_object->results as $value) {
        // echo '<pre>';
        // print_r($value);
        // echo '</pre>';

        if($value->name->raw != ""){ ?>
    <li class="bp-search-item bp-search-item_post has-access">
        <div class="list-wrap custom-wrapper-data">
            <div class="item">
                <h3 class="entry-title item-title">
                        <?php echo $value->name->raw; ?>
                    
                </h3>

                <div class="entry-content entry-summary">
                <?php 


                // $location = $value->location->raw;
                // if($value->location->raw != ""):
                //     echo '<div class="location">';
                //     echo 'Location : ';
                //     echo  $location;
                //     echo '</div>';
                // endif;
                
                
                
                if( $value->location->raw ):
                    echo '<div class="location test">';
                    //echo "Variable Type : ".gettype($value->location->raw);
                    echo 'Location : '; 

                    if(gettype($value->location->raw) == "array"){

                        foreach ($value->location->raw as $locationvalue) {
                            if( $locationvalue != "" )
                                    echo $locationvalue.", ";
                            //echo '<pre>';
                            //print_r($locationvalue);
                            //echo '</pre>';
                        }


                    }else{

                        echo $value->location->raw;
                    }

                    echo "<br>";
                
                    // foreach ($value->location->raw as $locationvalue) {
                    //     echo $locationvalue;
                    //     // echo '<pre>';
                    //     // print_r($locationvalue);
                    //     // echo '</pre>';
                    // }
                    echo '</div>';
                endif;
                
                if($value->role->raw != ""):
                    echo '<div class="role">';
                    echo 'Role : ';
                    echo  $value->role->raw;
                    echo '</div>';
                endif;
                if($value->investment_portfolio->raw != ""):
                
                echo '<div class="portfolio_company">';
                echo 'Portfolio Companies :';
                echo '<span>';
                echo $value->investment_portfolio->raw;
                echo '</span>';
                echo '</div>';
                endif; ?>
                <?php
                if($value->description->raw != ""):
                
                    echo '<div class="description">';
                    echo 'Description : ';
                    echo '<span>';
                    echo $value->description->raw;
                    echo '</span>';
                    echo '</div>';
                endif;?>
                </div>
                
            </div>
        </div>
            
    <ul class="social-list-custom-link" style="list-style: none;margin-left: 0px;">
        <?php if($value->mediatech->raw != ""): ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo $value->mediatech->raw; ?>"><img src="https://turntable-poc-elastic.netlify.app/static/media/MtvLogo.b9383c1c.png" style="width: 20px"></a></li>
<?php endif; ?>
        <?php if($value->facebook->raw != ""): ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo $value->facebook->raw; ?>"><img src="data:image/png;base64,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" style="width: 20px"></a></li>

    <?php endif; ?>
  <?php if($value->twitter->raw != ""): ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo $value->twitter->raw; ?>"><img src="data:image/png;base64,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" style="width: 20px"></a></li>
  
  <?php endif; ?>
   <?php if($value->deso->raw != ""): ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo $value->deso->raw; ?>"><img src="https://s2.coinmarketcap.com/static/img/coins/64x64/10442.png" style="width: 20px"></a></li>
    <?php endif; ?> 
    <?php if($value->linkedin->raw != ""): 
    ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo  $value->linkedin->raw; ?>"><img src="https://mediatech.ventures/wp-content/uploads/2022/04/download.png" style="width: 20px"></a></li>
<?php    endif; ?>
<?php if($value->crunchbase->raw != ""): ?>
        <li class="is_display" style="display: inline-block;"><a href="<?php echo $value->crunchbase->raw; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIISURBVHgB7VY9LENRFD6VCgZtQqiECok2kaiBMqiJRWsREwZjR1tZ2AwSG4OfRUxYxFSThKESCQaUoYsUQ5uQvGfQpk043y3N03f70loayfuW1757fr5zzndunqVpJfxJFUQVVRgmAZOASeD/E/A5Gyi54KeQr4v+AnMEVqNDW001TXtaqc1eJ/5HEyqFY0lS05miPhjJmNuRt488vdGT8lE+Ab/LQevjvUzCKgLYa6vJ5rVSiH/PHl5TNKnqfNYCvTTFhNV0NleAN+e7ePJAx7FE6QScXDGSK6kMJ7ui8/hbntQavz+aGaT+jbNfnZjytInnxN5F3h5kQj4X+3hoZEeVdkKqATihcm0wAFUsndyTmsqS392s8yu03799obnwDdl5lEFvhyyVnICvvUG0WMYYQfs3T+mAn1pE4q9S+0g8p4GAy0ElE8AIlFSWyoGR0HDm/BZySQQUFpG91nBBdLCxSI2gFNkcKQGsD1YPa1gIVIJbb4jHpIWn2SYLJexhG028l05g/+5ZCGd+WH+9Lo92U2jYpWs5kkC8WqAA2AN7HFMGaZ8htCFno1BuD1cGgeWSNAqBrkZiOgLYkOBAhziHPUYyzauJbdq6fNSJ9gcWo69i7HHQ28kk6sXlcsujQXe0wUBwd7JPJAEJjCfgbhGJ73iTUMw2nxWDxfwspwrDJGASMAl8AcSK1JNPm6f6AAAAAElFTkSuQmCC" style="width: 20px"></a></li>
    <?php endif; ?>
        <!-- <li style="display: inline-block;"><a href="#"><img src="/webapp/static/media/MtvLogo.b9383c1c.png" style="width: 20px"></a></li>
        <li style="display: inline-block;"><a href="#"><img src="/webapp/static/media/MtvLogo.b9383c1c.png" style="width: 20px"></a></li>
        <li style="display: inline-block;"><a href="#"><img src="/webapp/static/media/MtvLogo.b9383c1c.png" style="width: 20px"></a></li> -->
    </ul>
<?php } ?>    
    </li>
<?php } ?>

   

</ul>
<style type="text/css">
    li.is_display {
    width: 30px;
}
    ul.social-list {
    margin: 10px;
    }
    .list-wrap {
       border-bottom: none !important;
    }
    ul#activity_comment-stream li.is_display {
       display: inline-block !important;
    }
    .list-wrap.custom-wrapper-data {
           padding: 0px !important;
           padding-top: 10px !important;
    }
    ul.social-list-custom-link {
     margin: auto;
     margin-bottom: 10px !important;
    }
</style>
<?php bp_nouveau_pagination( 'bottom' ); ?>

@extends('layout.master')

@section('content')
  
  <section id="statussection" class="uk-section-large">
    <div class="gridxl uk-text-center">
      <h2>Be patient...</h2>
      <div class="uk-grid uk-grid-medium">

        <?php 
        $count = 0;
  
  
        foreach($sites as $site) {
          
          //call Google PageSpeed Insights API
          $googlePagespeedData = file_get_contents('https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=https://'.$site.'&screenshot=true');
  
          //decode json data
          $googlePagespeedData = json_decode($googlePagespeedData, true);
  
          //screenshot data
          $screenshot = $googlePagespeedData['screenshot']['data'];
          $screenshot = str_replace(array('_','-'),array('/','+'),$screenshot); 
  
          //display screenshot image
          ?>
            <div class="uk-width-1-1 uk-width-1-3@m">
              <div class="container">
                <?php echo "<img src=\"data:image/jpeg;base64,".$screenshot."\" />"; ?>
                <div class="text">
                  <a href="<?= $site; ?>" target="_blank"><h2 class="sitename"><?= $site; ?></h2></a>
                  <?php if($statuses[$count] == 'up'): ?>
                    <span class="status green"><?= $statuses[$count]; ?></span>
                  <?php else: ?>
                    <span class="status red"><?= $statuses[$count]; ?></span>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php

        } 
        
        ?>

      </div>
    </div>
  </section>

@endsection
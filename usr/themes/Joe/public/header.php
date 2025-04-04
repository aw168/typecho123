<header class="joe_header <?php echo $this->is('post') ? 'current' : '' ?>">
  <div class="joe_header__above">
    <div class="joe_container">
      <svg class="joe_header__above-slideicon" viewBox="0 0 1152 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <path d="M76.032 872a59.968 59.968 0 1 0 0 120h999.936a59.968 59.968 0 1 0 0-120H76.032zm16-420.032a59.968 59.968 0 1 0 0 120h599.936a59.968 59.968 0 1 0 0-119.936H92.032zM76.032 32a59.968 59.968 0 1 0 0 120h999.936a60.032 60.032 0 0 0 0-120H76.032z" />
      </svg>
      <a title="<?php echo htmlspecialchars($this->options->title ?: '默认标题'); ?>" class="joe_header__above-logo" href="<?php echo htmlspecialchars($this->options->siteUrl() ?: ''); ?>">
        <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo htmlspecialchars($this->options->JLogo ? $this->options->JLogo() : ''); ?>" alt="<?php echo htmlspecialchars($this->options->title ?: '默认标题'); ?>" />
        <svg class="profile-color-modes" height="45" viewBox="0 0 106 60" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
             <g class="profile-color-modes-illu-group profile-color-modes-illu-red">
            <path d="M37.5 58.5V57.5C37.5 49.768 43.768 43.5 51.5 43.5V43.5C59.232 43.5 65.5 49.768 65.5 57.5V58.5"></path>
          </g>
          <g class="profile-color-modes-illu-group profile-color-modes-illu-orange">
            <path d="M104.07 58.5C103.401 55.092 97.7635 54.3869 95.5375 57.489C97.4039 54.6411 99.7685 48.8845 94.6889 46.6592C89.4817 44.378 86.1428 50.1604 85.3786 54.1158C85.9519 50.4768 83.7226 43.294 78.219 44.6737C72.7154 46.0534 72.7793 51.3754 74.4992 55.489C74.169 54.7601 72.4917 53.3567 70.5 52.8196"></path>
          </g>
          <g class="profile-color-modes-illu-group profile-color-modes-illu-purple">
            <path d="M5.51109 58.5V52.5C5.51109 41.4543 14.4654 32.5 25.5111 32.5C31.4845 32.5 36.8464 35.1188 40.5111 39.2709C40.7212 39.5089 40.9258 39.7521 41.1245 40"></path>
            <path d="M27.511 49.5C29.6777 49.5 28.911 49.5 32.511 49.5"></path>
            <path d="M27.511 56.5C29.6776 56.5 26.911 56.5 30.511 56.5"></path>
          </g>
          <g class="profile-color-modes-illu-group profile-color-modes-illu-green">
            <circle cx="5.5" cy="12.5" r="4"></circle>
            <circle cx="18.5" cy="5.5" r="4"></circle>
            <path d="M18.5 9.5L18.5 27.5"></path>
            <path d="M18.5 23.5C6 23.5 5.5 23.6064 5.5 16.5"></path>
          </g>
          <g class="profile-color-modes-illu-group profile-color-modes-illu-blue">
            <g class="profile-color-modes-illu-frame">
              <path d="M40.6983 31.5C40.5387 29.6246 40.6456 28.0199 41.1762 27.2317C42.9939 24.5312 49.7417 26.6027 52.5428 30.2409C54.2551 29.8552 56.0796 29.6619 57.9731 29.6619C59.8169 29.6619 61.5953 29.8452 63.2682 30.211C66.0833 26.5913 72.799 24.5386 74.6117 27.2317C75.6839 28.8246 75.0259 33.7525 73.9345 37.5094C74.2013 37.9848 74.4422 38.4817 74.6555 39"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M41.508 31.5C41.6336 31.2259 41.7672 30.9582 41.9085 30.6968C40.7845 26.9182 40.086 21.8512 41.1762 20.2317C42.9939 17.5312 49.7417 19.6027 52.5428 23.2409C54.2551 22.8552 56.0796 22.6619 57.9731 22.6619C59.8169 22.6619 61.5953 22.8452 63.2682 23.211C66.0833 19.5913 72.799 17.5386 74.6117 20.2317C75.6839 21.8246 75.0259 26.7525 73.9345 30.5094C75.1352 32.6488 75.811 35.2229 75.811 38.2283C75.811 38.49 75.8058 38.7472 75.7957 39"></path>
              <path d="M49.4996 33V35.6757"></path>
              <path d="M67.3375 33V35.6757"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M41.508 31.5C41.6336 31.2259 41.7672 30.9582 41.9085 30.6968C40.7845 26.9182 40.086 21.8512 41.1762 20.2317C42.9939 17.5312 49.7417 19.6027 52.5428 23.2409C54.2551 22.8552 56.0796 22.6619 57.9731 22.6619C59.8169 22.6619 61.5953 22.8452 63.2682 23.211C66.0833 19.5913 72.799 17.5386 74.6117 20.2317C75.6839 21.8246 75.0259 26.7525 73.9345 30.5094C75.1352 32.6488 75.811 35.2229 75.811 38.2283C75.811 38.49 75.8058 38.7472 75.7957 39"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M41.508 31.5C41.6336 31.2259 41.7672 30.9582 41.9085 30.6968C40.7845 26.9182 40.086 21.8512 41.1762 20.2317C42.9939 17.5312 49.7417 19.6027 52.5428 23.2409C54.2551 22.8552 56.0796 22.6619 57.9731 22.6619C59.8169 22.6619 61.5953 22.8452 63.2682 23.211C66.0833 19.5913 72.799 17.5386 74.6117 20.2317C75.6839 21.8246 75.0259 26.7525 73.9345 30.5094C75.1352 32.6488 75.811 35.2229 75.811 38.2283C75.811 38.49 75.8058 38.7472 75.7957 39"></path>
              <path d="M49.4996 33V35.6757"></path>
              <path d="M67.3375 33V35.6757"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M41.508 31.5C41.6336 31.2259 41.7672 30.9582 41.9085 30.6968C40.7845 26.9182 40.086 21.8512 41.1762 20.2317C42.9939 17.5312 49.7417 19.6027 52.5428 23.2409C54.2551 22.8552 56.0796 22.6619 57.9731 22.6619C59.8169 22.6619 61.5953 22.8452 63.2682 23.211C66.0833 19.5913 72.799 17.5386 74.6117 20.2317C75.6839 21.8246 75.0259 26.7525 73.9345 30.5094C75.1352 32.6488 75.811 35.2229 75.811 38.2283C75.811 38.49 75.8058 38.7472 75.7957 39"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M41.508 31.5C41.6336 31.2259 41.7672 30.9582 41.9085 30.6968C40.7845 26.9182 40.086 21.8512 41.1762 20.2317C42.9939 17.5312 49.7417 19.6027 52.5428 23.2409C54.2551 22.8552 56.0796 22.6619 57.9731 22.6619C59.8169 22.6619 61.5953 22.8452 63.2682 23.211C66.0833 19.5913 72.799 17.5386 74.6117 20.2317C75.6839 21.8246 75.0259 26.7525 73.9345 30.5094C75.1352 32.6488 75.811 35.2229 75.811 38.2283C75.811 38.49 75.8058 38.7472 75.7957 39"></path>
              <path d="M49.4996 33V35.6757"></path>
              <path d="M67.3375 33V35.6757"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M73.4999 40.2236C74.9709 38.2049 75.8108 35.5791 75.8108 32.2283C75.8108 29.2229 75.1351 26.6488 73.9344 24.5094C75.0258 20.7525 75.6838 15.8246 74.6116 14.2317C72.7989 11.5386 66.0832 13.5913 63.2681 17.211C61.5952 16.8452 59.8167 16.6619 57.973 16.6619C56.0795 16.6619 54.2549 16.8552 52.5427 17.2409C49.7416 13.6027 42.9938 11.5312 41.176 14.2317C40.0859 15.8512 40.7843 20.9182 41.9084 24.6968C41.003 26.3716 40.4146 28.3065 40.2129 30.5"></path>
              <path d="M82.9458 30.5471L76.8413 31.657"></path>
              <path d="M76.2867 34.4319L81.8362 37.7616"></path>
              <path d="M49.4995 27.8242V30.4999"></path>
              <path d="M67.3374 27.8242V30.4998"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M45.3697 34.2658C41.8877 32.1376 39.7113 28.6222 39.7113 23.2283C39.7113 20.3101 40.3483 17.7986 41.4845 15.6968C40.3605 11.9182 39.662 6.85125 40.7522 5.23168C42.5699 2.53117 49.3177 4.6027 52.1188 8.24095C53.831 7.85521 55.6556 7.66186 57.5491 7.66186C59.3929 7.66186 61.1713 7.84519 62.8442 8.21095C65.6593 4.59134 72.375 2.5386 74.1877 5.23168C75.2599 6.82461 74.6019 11.7525 73.5105 15.5094C70.8603 17.5363 72.6057 20.3556 73.3076 22C74.1352 24.6488 74.811 27.2229 74.811 30.2283C74.811 35.6222 72.2105 39.1376 68.7285 41.2658C69.8603 42.5363 71.6057 45.3556 72.3076 47"></path>
              <path d="M49.0747 19.8242V22.4999"></path>
              <path d="M54.0991 28C54.6651 29.0893 55.7863 30.0812 57.9929 30.0812C59.0642 30.0812 59.8797 29.8461 60.5 29.4788"></path>
              <path d="M66.9126 19.8242V22.4999"></path>
              <path d="M33.2533 20.0237L39.0723 22.1767"></path>
              <path d="M39.1369 25.0058L33.0935 27.3212"></path>
              <path d="M81.8442 19.022L76.0252 21.1751"></path>
              <path d="M75.961 24.0041L82.0045 26.3196"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M73.4999 40.2236C74.9709 38.2049 75.8108 35.5791 75.8108 32.2283C75.8108 29.2229 75.1351 26.6488 73.9344 24.5094C75.0258 20.7525 75.6838 15.8246 74.6116 14.2317C72.7989 11.5386 66.0832 13.5913 63.2681 17.211C61.5952 16.8452 59.8167 16.6619 57.973 16.6619C56.0795 16.6619 54.2549 16.8552 52.5427 17.2409C49.7416 13.6027 42.9938 11.5312 41.176 14.2317C40.0859 15.8512 40.7843 20.9182 41.9084 24.6968C41.003 26.3716 40.4146 28.3065 40.2129 30.5"></path>
              <path d="M82.9458 30.5471L76.8413 31.657"></path>
              <path d="M76.2867 34.4319L81.8362 37.7616"></path>
              <path d="M49.4995 27.8242V30.4999"></path>
              <path d="M67.3374 27.8242V30.4998"></path>
            </g>
            <g class="profile-color-modes-illu-frame">
              <path d="M40.6983 31.5C40.5387 29.6246 40.6456 28.0199 41.1762 27.2317C42.9939 24.5312 49.7417 26.6027 52.5428 30.2409C54.2551 29.8552 56.0796 29.6619 57.9731 29.6619C59.8169 29.6619 61.5953 29.8452 63.2682 30.211C66.0833 26.5913 72.799 24.5386 74.6117 27.2317C75.6839 28.8246 75.0259 33.7525 73.9345 37.5094C74.2013 37.9848 74.4422 38.4817 74.6555 39"></path>
            </g>
          </g>
        </svg>
      </a>
      <nav class="joe_header__above-nav">
        <a class="item <?php echo $this->is('index') ? 'active' : '' ?>" href="<?php echo htmlspecialchars($this->options->siteUrl() ?: ''); ?>" title="首页">首页</a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php // FIX: Check if $pages exists and stack is a non-empty array before proceeding
              if ($pages && property_exists($pages, 'stack') && is_array($pages->stack) && !empty($pages->stack)) : ?>
          <?php if (isset($this->options->JNavMaxNum) && count($pages->stack) <= $this->options->JNavMaxNum) : ?>
            <?php foreach ($pages->stack as $item) : ?>
              <?php if (is_array($item) && isset($item['slug']) && isset($item['permalink']) && isset($item['title'])): // Add inner check for robustness ?>
              <a class="item <?php echo $this->is('page', $item['slug']) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($item['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($item['title'] ?: ''); ?>"><?php echo htmlspecialchars($item['title'] ?: ''); ?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php elseif (isset($this->options->JNavMaxNum)) : // Handle the case where there are more pages than JNavMaxNum ?>
            <?php foreach (array_slice($pages->stack, 0, $this->options->JNavMaxNum) as $item) : ?>
               <?php if (is_array($item) && isset($item['slug']) && isset($item['permalink']) && isset($item['title'])): // Add inner check for robustness ?>
               <a class="item <?php echo $this->is('page', $item['slug']) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($item['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($item['title'] ?: ''); ?>"><?php echo htmlspecialchars($item['title'] ?: ''); ?></a>
               <?php endif; ?>
            <?php endforeach; ?>
            <div class="joe_dropdown" trigger="hover" placement="60px" style="margin-right: 15px;">
              <div class="joe_dropdown__link">
                <a href="#" rel="nofollow">更多</a>
                <svg class="joe_header__above-nav-more-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="14" height="14">
                  <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" p-id="3535" fill="var(--main)"></path>
                </svg>
              </div>
              <nav class="joe_dropdown__menu">
                <?php foreach (array_slice($pages->stack, $this->options->JNavMaxNum) as $item) : ?>
                   <?php if (is_array($item) && isset($item['slug']) && isset($item['permalink']) && isset($item['title'])): // Add inner check for robustness ?>
                   <a class="<?php echo $this->is('page', $item['slug']) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($item['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($item['title'] ?: ''); ?>"><?php echo htmlspecialchars($item['title'] ?: ''); ?></a>
                   <?php endif; ?>
                <?php endforeach; ?>
              </nav>
            </div>
           <?php else: // Fallback if JNavMaxNum is not set - show all pages ?>
             <?php foreach ($pages->stack as $item) : ?>
               <?php if (is_array($item) && isset($item['slug']) && isset($item['permalink']) && isset($item['title'])): // Add inner check for robustness ?>
               <a class="item <?php echo $this->is('page', $item['slug']) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($item['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($item['title'] ?: ''); ?>"><?php echo htmlspecialchars($item['title'] ?: ''); ?></a>
               <?php endif; ?>
             <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; // End check for $pages ?>
        <?php
        $custom = [];
        // Check if JCustomNavs option exists before trying to access it
        if (property_exists($this->options, 'JCustomNavs') && $this->options->JCustomNavs) {
            $custom_text = $this->options->JCustomNavs;
            // Ensure explode has 2 parts before accessing index 1
            $custom_arr = explode("\r\n", $custom_text);
            if (count($custom_arr) > 0) {
                for ($i = 0; $i < count($custom_arr); $i++) {
                    $parts = explode("||", $custom_arr[$i]);
                    $title = isset($parts[0]) ? trim($parts[0]) : '';
                    $url = isset($parts[1]) ? trim($parts[1]) : '#'; // Default to '#' if URL part is missing
                    if ($title) { // Only add if title is not empty
                        $custom[] = array("title" => $title, "url" => $url);
                    }
                }
            }
        }
        ?>
        <?php if (sizeof($custom) > 0) : ?>
          <div class="joe_dropdown" trigger="hover" placement="60px">
            <div class="joe_dropdown__link">
              <a href="#" rel="nofollow">推荐</a>
              <svg class="joe_dropdown__link-icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="14" height="14">
                <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" fill="var(--main)" />
              </svg>
            </div>
            <nav class="joe_dropdown__menu">
              <?php foreach ($custom as $item) : ?>
                 <?php if (is_array($item) && isset($item['url']) && isset($item['title'])): // Check item structure ?>
                 <a href="<?php echo htmlspecialchars($item['url'] ?: '#'); ?>" target="_blank" rel="noopener noreferrer nofollow"><?php echo htmlspecialchars($item['title'] ?: ''); ?></a>
                 <?php endif; ?>
              <?php endforeach; ?>
            </nav>
          </div>
        <?php endif; ?>
      </nav>
      <form class="joe_header__above-search" method="post" action="<?php echo htmlspecialchars($this->options->siteUrl() ?: ''); ?>">
        <input maxlength="16" autocomplete="off" placeholder="请输入关键字..." name="s" value="<?php echo $this->is('search') ? htmlspecialchars($this->archiveTitle(' » ', '', '')) : ''; ?>" class="input" type="text" />
        <button type="submit" class="submit">Search</button>
        <span class="icon"></span>
        <nav class="result">
          <?php
            // Check if Widget_Contents_Hot exists before calling - useful for different Typecho versions/plugins
            // Also check if the necessary method 'to' exists on the widget object
            try {
                $itemWidget = $this->widget('Widget_Contents_Hot@Search', 'pageSize=5');
                if ($itemWidget && method_exists($itemWidget, 'have') && $itemWidget->have()) { // Check if the widget returned results
                    $index = 1;
                    while ($itemWidget->next()) : ?>
                      <a href="<?php echo htmlspecialchars($itemWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($itemWidget->title() ?: ''); ?>" class="item">
                        <span class="sort"><?php echo $index; ?></span>
                        <span class="text"><?php echo htmlspecialchars($itemWidget->title() ?: ''); ?></span>
                        <span class="views"><?php echo method_exists($itemWidget, 'views') ? number_format($itemWidget->views) : '0'; ?> 阅读</span>
                      </a>
                    <?php $index++;
                    endwhile;
                }
            } catch (Exception $e) {
                // Optional: Log the error or display a message
                // echo "";
            }
          ?>
        </nav>
      </form>
      <svg class="joe_header__above-searchicon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <path d="M1008.19 932.031L771.72 695.56a431.153 431.153 0 1 0-76.158 76.158l236.408 236.472a53.758 53.758 0 0 0 76.158 0 53.758 53.758 0 0 0 0-76.158zM107.807 431.185a323.637 323.637 0 0 1 323.316-323.381 323.7 323.7 0 0 1 323.381 323.38 323.637 323.637 0 0 1-323.38 323.317 323.637 323.637 0 0 1-323.317-323.316z" />
      </svg>
    </div>
  </div>

  <div class="joe_header__below">
    <div class="joe_container">
      <?php if ($this->is('post')) : ?>
        <div class="joe_header__below-title"><?php $this->title() ?></div>
      <?php endif; ?>
      <nav class="joe_header__below-class">
        <?php
            try {
                $categoryWidget = $this->widget('Widget_Metas_Category_List');
                 // Check if category widget returned results
                if ($categoryWidget && method_exists($categoryWidget, 'have') && $categoryWidget->have()) :
                    while ($categoryWidget->next()) : ?>
                        <?php if ($categoryWidget->levels === 0) : ?>
                            <?php $children = $categoryWidget->getAllChildren($categoryWidget->mid); ?>
                            <?php if (empty($children)) : ?>
                            <a class="item <?php echo $this->is('category', $categoryWidget->slug) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($categoryWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($categoryWidget->name() ?: ''); ?>"><?php echo htmlspecialchars($categoryWidget->name() ?: ''); ?></a>
                            <?php else : ?>
                            <div class="joe_dropdown" trigger="hover">
                                <div class="joe_dropdown__link">
                                <a class="item <?php echo $this->is('category', $categoryWidget->slug) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($categoryWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($categoryWidget->name() ?: ''); ?>"><?php echo htmlspecialchars($categoryWidget->name() ?: ''); ?></a>
                                <svg class="joe_dropdown__link-icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="13" height="13">
                                    <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" fill="var(--minor)" />
                                </svg>
                                </div>
                                <nav class="joe_dropdown__menu">
                                <?php foreach ($children as $mid) : ?>
                                    <?php $child = $categoryWidget->getCategory($mid); ?>
                                    <?php if (is_array($child) && isset($child['slug']) && isset($child['permalink']) && isset($child['name'])): // Check child structure ?>
                                    <a class="<?php echo $this->is('category', $child['slug']) ? 'active' : '' ?>" href="<?php echo htmlspecialchars($child['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($child['name'] ?: ''); ?>"><?php echo htmlspecialchars($child['name'] ?: ''); ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </nav>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; // End check for category
            } catch (Exception $e) {
                 // Optional: Log the error or display a message
                 // echo "";
            }
        ?>
      </nav>
      <div class="joe_header__below-sign">
        <?php if ($this->user->hasLogin()) : ?>
          <div class="joe_dropdown" trigger="click">
            <div class="joe_dropdown__link">
              <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                 <path d="M231.594 610.125C135.087 687.619 71.378 804.28 64.59 935.994c-.373 7.25 3.89 23.307 30.113 23.307s33.512-16.06 33.948-23.301c6.861-114.025 63.513-214.622 148.5-280.346 3.626-2.804 16.543-17.618 3.24-39.449-13.702-22.483-40.863-12.453-48.798-6.08zm280.112-98.44v63.96c204.109 0 370.994 159.345 383.06 360.421.432 7.219 8.649 23.347 32.44 23.347s31.991-16.117 31.62-23.342c-12.14-236.422-207.676-424.386-447.12-424.386z" />
                 <path d="M319.824 319.804c0-105.974 85.909-191.883 191.882-191.883s191.883 85.91 191.883 191.883c0 26.57-5.405 51.88-15.171 74.887-5.526 14.809-2.082 31.921 20.398 38.345 23.876 6.822 36.732-8.472 41.44-20.583 11.167-28.729 17.294-59.973 17.294-92.65 0-141.297-114.545-255.842-255.843-255.842S255.863 178.506 255.863 319.804s114.545 255.843 255.843 255.843v-63.961c-105.973-.001-191.882-85.909-191.882-191.882z" />
                 <path d="M512 255.843s21.49-5.723 21.49-31.306S512 191.882 512 191.882c-70.65 0-127.921 57.273-127.921 127.922 0 3.322.126 6.615.375 9.875.264 3.454 14.94 18.116 37.044 14.425 22.025-3.679 26.6-21.93 26.6-21.93-.028-.788-.06-1.575-.06-2.37.001-35.325 28.637-63.961 63.962-63.961z" />
              </svg>
              <span><?php echo htmlspecialchars($this->user->screenName ?: ''); // Use null coalescing operator ?></span>
            </div>
            <nav class="joe_dropdown__menu">
              <?php if ($this->user->pass('administrator', true) || $this->user->pass('editor', true) || $this->user->pass('contributor', true)) : ?>
                <a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo htmlspecialchars($this->options->adminUrl('manage-posts.php') ?: ''); ?>">管理文章</a>
              <?php endif; ?>
              <?php if ($this->user->pass('administrator', true) || $this->user->pass('editor', true)) : ?>
                <a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo htmlspecialchars($this->options->adminUrl('manage-comments.php') ?: ''); ?>">管理评论</a>
              <?php endif; ?>
              <?php if ($this->user->pass('administrator', true)) : ?>
                <a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo htmlspecialchars($this->options->adminUrl('options-theme.php') ?: ''); ?>">修改外观</a>
              <?php endif; ?>
              <a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo htmlspecialchars($this->options->adminUrl() ?: ''); ?>">进入后台</a>
              <a href="<?php echo htmlspecialchars($this->options->logoutUrl ?: ''); // Use null coalescing operator ?>">退出登录</a>
            </nav>
          </div>
        <?php else : ?>
          <div class="item">
            <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
              <path d="M710.698 299a213.572 213.572 0 1 0-213.572 213.954A213.572 213.572 0 0 0 710.698 299zm85.429 0a299.382 299.382 0 1 1-299-299 299 299 0 0 1 299 299z" />
              <path d="M114.223 1024a46.91 46.91 0 0 1-46.91-46.91 465.281 465.281 0 0 1 468.332-460.704 475.197 475.197 0 0 1 228.827 58.35 46.91 46.91 0 1 1-45.384 82.378 381.378 381.378 0 0 0-183.443-46.909 371.08 371.08 0 0 0-374.131 366.886A47.29 47.29 0 0 1 114.223 1024zM944.483 755.129a38.138 38.138 0 0 0-58.733 0l-146.449 152.55-92.675-91.53a38.138 38.138 0 0 0-58.732 0 43.858 43.858 0 0 0 0 61.402l117.083 122.422a14.492 14.492 0 0 0 8.39 4.577c4.196 0 4.196 4.195 8.39 4.195h32.037c4.195 0 4.195-4.195 8.39-4.195s4.195-4.577 8.39-4.577L946.39 816.15a48.054 48.054 0 0 0-1.906-61.02z" />
              <path d="M763.328 776.104L730.53 744.45a79.708 79.708 0 0 0 32.798 31.654" />
            </svg>
            <a href="<?php echo htmlspecialchars($this->options->adminUrl('login.php') ?: ''); ?>" target="_blank" rel="noopener noreferrer nofollow">登录</a>
            <?php if ($this->options->allowRegister) : ?>
              <span class="split">/</span>
              <a href="<?php echo htmlspecialchars($this->options->adminUrl('register.php') ?: ''); ?>" target="_blank" rel="noopener noreferrer nofollow">注册</a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="joe_header__searchout">
    <div class="joe_container">
      <div class="joe_header__searchout-inner">
        <form class="search" method="post" action="<?php echo htmlspecialchars($this->options->siteUrl() ?: ''); ?>">
          <input maxlength="16" autocomplete="off" placeholder="请输入关键字..." name="s" value="<?php echo $this->is('search') ? htmlspecialchars($this->archiveTitle(' » ', '', '')) : ''; ?>" class="input" type="text" />
          <button type="submit" class="submit">Search</button>
        </form>
         <?php
            try {
                 $tagsWidget = $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 20));
                 // Check if tags widget returned results
                 if ($tagsWidget && method_exists($tagsWidget, 'have') && $tagsWidget->have()) : ?>
                    <div class="title">
                        <svg class="icon" viewBox="0 0 1445 1024" xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                        <path d="M1055.021 277.865a348.762 348.762 0 0 1 348.401 348.341c0 178.96-136.132 327.68-311.778 346.172l-758.603 2.35A291.238 291.238 0 0 1 42.165 683.79a291.238 291.238 0 0 1 273.227-290.334 369.242 369.242 0 0 1 368.4-351.292 370.568 370.568 0 0 1 344.184 236.905c9.336-.783 18.19-1.205 27.045-1.205zM683.791 156.25a255.036 255.036 0 0 0-254.735 254.796V507h-95.955a177.032 177.032 0 0 0-176.79 176.791 177.032 177.032 0 0 0 176.79 176.85h721.98a234.677 234.677 0 0 0 234.316-234.435 234.616 234.616 0 0 0-234.316-234.255 234.616 234.616 0 0 0-234.315 234.315v18.07H706.56v-18.07A348.4 348.4 0 0 1 915.817 307.2a255.578 255.578 0 0 0-232.026-151.01z" />
                        </svg>标签搜索
                    </div>
                    <ul class="cloud">
                        <?php $colors = [ /* Color array remains the same */
                            '#F8D800', '#0396FF', '#EA5455', '#7367F0', '#32CCBC',
                            '#F6416C', '#28C76F', '#9F44D3', '#F55555', '#736EFE',
                            '#E96D71', '#DE4313', '#D939CD', '#4C83FF', '#F072B6',
                            '#C346C2', '#5961F9', '#FD6585', '#465EFB', '#FFC600',
                            '#FA742B', '#5151E5', '#BB4E75', '#FF52E5', '#49C628',
                            '#00EAFF', '#F067B4', '#F067B4', '#ff9a9e', '#00f2fe',
                            '#4facfe', '#f093fb', '#6fa3ef', '#bc99c4', '#46c47c',
                            '#f9bb3c', '#e8583d', '#f68e5f',
                        ]; ?>
                        <?php while ($tagsWidget->next()) : ?>
                        <li class="item">
                            <a style="background: <?php echo $colors[array_rand($colors)]; // Use array_rand for safer random index ?>" href="<?php echo htmlspecialchars($tagsWidget->permalink() ?: ''); ?>"><?php echo htmlspecialchars($tagsWidget->name() ?: ''); ?></a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; // End check for tags
            } catch (Exception $e) {
                 // Optional: Log the error or display a message
                 // echo "";
            }
         ?>
      </div>
    </div>
  </div>

  <div class="joe_header__slideout">
     <img width="100%" height="150" class="joe_header__slideout-image" src="<?php echo htmlspecialchars(property_exists($this->options, 'JAside_Wap_Image') && $this->options->JAside_Wap_Image ? $this->options->JAside_Wap_Image() : ''); ?>" alt="侧边栏壁纸" />
     <div class="joe_header__slideout-author">
       <?php
           // Determine avatar source more safely
           $avatarSrc = '';
           if (property_exists($this->options, 'JAside_Author_Avatar') && $this->options->JAside_Author_Avatar) {
               $avatarSrc = $this->options->JAside_Author_Avatar();
           } else {
               $authorMail = '';
               // Check if author object and mail property exist
               if (property_exists($this, 'author') && is_object($this->author) && property_exists($this->author, 'mail')) {
                   $authorMail = $this->author->mail;
                // Check if user object, login status, and mail property exist
               } elseif (property_exists($this, 'user') && is_object($this->user) && $this->user->hasLogin() && property_exists($this->user, 'mail')) {
                   $authorMail = $this->user->mail;
               }
                // Check if function exists before calling
               if (function_exists('_getAvatarByMail')) {
                   $avatarSrc = _getAvatarByMail($authorMail);
               }
           }
            // Determine lazyload source
            $lazyLoadSrc = function_exists('_getAvatarLazyload') ? _getAvatarLazyload() : 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='; // Fallback placeholder
       ?>
       <img width="50" height="50" class="avatar lazyload" src="<?php echo $lazyLoadSrc; ?>" data-src="<?php echo htmlspecialchars($avatarSrc); ?>" alt="博主昵称" />
       <div class="info">
          <?php
              // Determine author name more safely
              $authorName = '';
              if (property_exists($this->options, 'JAside_Author_Nick') && $this->options->JAside_Author_Nick) {
                   $authorName = $this->options->JAside_Author_Nick();
               // Check if author object and screenName property exist
              } elseif (property_exists($this, 'author') && is_object($this->author) && property_exists($this->author, 'screenName')) {
                   $authorName = $this->author->screenName();
               // Check if user object, login status, and screenName property exist
              } elseif (property_exists($this, 'user') && is_object($this->user) && $this->user->hasLogin() && property_exists($this->user, 'screenName')) {
                  $authorName = $this->user->screenName();
              }
          ?>
          <a class="link" href="<?php echo htmlspecialchars(property_exists($this->options, 'JAside_Author_Link') && $this->options->JAside_Author_Link ? $this->options->JAside_Author_Link() : ''); ?>" target="_blank" rel="noopener noreferrer nofollow"><?php echo htmlspecialchars($authorName); ?></a>
          <p class="motto joe_motto"></p>
       </div>
    </div>
    <ul class="joe_header__slideout-count">
      <?php
        try {
             $statWidget = Typecho_Widget::widget('Widget_Stat');
             // Check if stat widget returned results and properties exist
             if ($statWidget && property_exists($statWidget, 'publishedPostsNum')): ?>
             <li class="item">
                <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                <path d="M606.227 985.923H164.75c-69.715 0-126.404-56.722-126.404-126.442V126.477C38.346 56.755 95.04 0 164.75 0h619.275c69.715 0 126.549 56.755 126.549 126.477v503.925c0 18.216-14.814 32.997-33.07 32.997-18.183 0-32.925-14.78-32.925-32.997V126.477c0-33.355-27.2-60.488-60.554-60.488H164.75c-33.353 0-60.41 27.133-60.41 60.488v733.004c0 33.353 27.057 60.441 60.41 60.441h441.477c18.183 0 32.925 14.787 32.925 33.004 0 18.211-14.742 32.997-32.925 32.997zm0 0" />
                <path d="M657.62 322.056H291.154c-18.183 0-32.924-14.786-32.924-33.003 0-18.21 14.74-32.998 32.924-32.998H657.62c18.256 0 33.07 14.787 33.07 32.998 0 18.217-14.814 33.003-33.07 33.003zm0 0M657.62 504.749H291.154c-18.183 0-32.924-14.78-32.924-32.993 0-18.222 14.74-32.997 32.924-32.997H657.62c18.256 0 33.07 14.775 33.07 32.997 0 18.218-14.814 32.993-33.07 32.993zm0 0M445.611 687.486H291.154c-18.183 0-32.924-14.78-32.924-33.004 0-18.21 14.74-32.991 32.924-32.991h154.457c18.184 0 32.998 14.78 32.998 32.991 0 18.224-14.814 33.004-32.998 33.004zm0 0M866.482 1024c-8.447 0-16.896-3.225-23.34-9.662L577.595 748.786c-7.156-7.123-10.592-17.07-9.446-27.056l8.733-77.728c1.788-15.321 13.885-27.378 29.2-29.06l77.45-8.52c10.443-.965 19.9 2.433 26.905 9.449l265.558 265.551c12.875 12.877 12.875 33.784 0 46.666l-86.184 86.25c-6.438 6.437-14.887 9.662-23.33 9.662zm-231.05-310.646l231.05 231.018 39.575-39.62-231.043-231.05-35.505 3.938-4.076 35.714zm0 0" />
                </svg>
                <span>累计撰写 <strong><?php echo number_format($statWidget->publishedPostsNum); ?></strong> 篇文章</span>
             </li>
             <?php endif; ?>
             <?php if ($statWidget && property_exists($statWidget, 'publishedCommentsNum')): ?>
             <li class="item">
                <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                <path d="M921.6 153.6H102.4A102.4 102.4 0 0 0 0 256v512a102.4 102.4 0 0 0 102.4 102.4h819.2A102.4 102.4 0 0 0 1024 768V256a102.4 102.4 0 0 0-102.4-102.4zM687.616 473.088L972.8 258.304V791.04zM960 204.8L527.104 527.36 73.216 204.8zM371.2 483.584l-320 287.232V256zM73.984 819.2l339.2-307.2 83.456 59.392a51.2 51.2 0 0 0 60.416 0l89.6-67.328L931.072 819.2z" />
                </svg>
                <span>累计收到 <strong><?php echo number_format($statWidget->publishedCommentsNum); ?></strong> 条评论</span>
             </li>
             <?php endif;
        } catch (Exception $e) {
             // Optional: Log the error or display a message
             // echo "";
        }
      ?>
    </ul>
    <ul class="joe_header__slideout-menu panel-box">
      <li>
        <a class="link" href="<?php echo htmlspecialchars($this->options->siteUrl() ?: ''); ?>" title="首页">
          <span>首页</span>
        </a>
      </li>
      <?php
        try {
            // Re-fetch or reuse category data if needed, ensure $slideCategoryWidget is available
            $slideCategoryWidget = $this->widget('Widget_Metas_Category_List');
            if ($slideCategoryWidget && method_exists($slideCategoryWidget, 'have') && $slideCategoryWidget->have()): ?>
            <li>
                <a class="link panel" href="#" rel="nofollow">
                <span>栏目</span>
                <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="13" height="13">
                    <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z" />
                </svg>
                </a>
                <ul class="slides panel-body panel-box">
                <?php while ($slideCategoryWidget->next()) : ?>
                    <?php if ($slideCategoryWidget->levels === 0) : ?>
                        <?php $children = $slideCategoryWidget->getAllChildren($slideCategoryWidget->mid); ?>
                        <?php if (empty($children)) : ?>
                        <li>
                            <a class="link <?php echo $this->is('category', $slideCategoryWidget->slug) ? 'current' : '' ?>" href="<?php echo htmlspecialchars($slideCategoryWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($slideCategoryWidget->name() ?: ''); ?>"><?php echo htmlspecialchars($slideCategoryWidget->name() ?: ''); ?></a>
                        </li>
                        <?php else : ?>
                        <li>
                            <div class="link panel <?php echo $this->is('category', $slideCategoryWidget->slug) ? 'current' : '' ?>">
                                <a href="<?php echo htmlspecialchars($slideCategoryWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($slideCategoryWidget->name() ?: ''); ?>"><?php echo htmlspecialchars($slideCategoryWidget->name() ?: ''); ?></a>
                                <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="13" height="13">
                                <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z" />
                                </svg>
                            </div>
                            <ul class="slides panel-body">
                                <?php foreach ($children as $mid) : ?>
                                <?php $child = $slideCategoryWidget->getCategory($mid); ?>
                                    <?php if (is_array($child) && isset($child['slug']) && isset($child['permalink']) && isset($child['name'])): // Check child structure ?>
                                <li>
                                    <a class="link <?php echo $this->is('category', $child['slug']) ? 'current' : '' ?>" href="<?php echo htmlspecialchars($child['permalink'] ?: ''); ?>" title="<?php echo htmlspecialchars($child['name'] ?: ''); ?>"><?php echo htmlspecialchars($child['name'] ?: ''); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                </ul>
            </li>
            <?php endif; // End check for slideCategory
        } catch (Exception $e) {
             // Optional: Log the error or display a message
             // echo "";
        }
      ?>
      <?php
        try {
            // Re-fetch or reuse page data if needed, ensure $slidePagesWidget is available
            $slidePagesWidget = $this->widget('Widget_Contents_Page_List');
            if ($slidePagesWidget && method_exists($slidePagesWidget, 'have') && $slidePagesWidget->have()): ?>
            <li>
                <a class="link panel" href="#" rel="nofollow">
                <span>页面</span>
                <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="13" height="13">
                    <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z" />
                </svg>
                </a>
                <ul class="slides panel-body">
                <?php while ($slidePagesWidget->next()) : ?>
                    <li>
                        <a class="link <?php echo $this->is('page', $slidePagesWidget->slug) ? 'current' : '' ?>" href="<?php echo htmlspecialchars($slidePagesWidget->permalink() ?: ''); ?>" title="<?php echo htmlspecialchars($slidePagesWidget->title() ?: ''); ?>"><?php echo htmlspecialchars($slidePagesWidget->title() ?: ''); ?></a>
                    </li>
                <?php endwhile; ?>
                </ul>
            </li>
            <?php endif; // End check for slidePages
        } catch (Exception $e) {
             // Optional: Log the error or display a message
             // echo "";
        }
       ?>
      </ul>
  </div>
</header>

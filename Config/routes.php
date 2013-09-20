<?php
Router::connect('/state-bars', array('plugin' => 'StateBars', 'controller' => 'StateBars'));
Router::connect('/state-bars/index/*', array('plugin' => 'StateBars', 'controller' => 'StateBars'));
Router::connect('/state-bars/:action/*', array('plugin' => 'StateBars', 'controller' => 'StateBars'));
<?php
namespace Deployer;

//mysql
// user blogdemo
// OthQPj1eE4wk5sE

require 'recipe/Laravel.php';

// Project name
//set('application', '/home/blueshift9/domains/d.psweeney.me/public_html/current');

// Project repository
set('repository', 'git@github.com:blueshift9/flashblog.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server
set('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('blogdemo.psweeney.me')->user('deployer')
    ->identityFile('~/.ssh/deployerkey')->set('deploy_path', '/home/blogdemo.psweeney.me/public_html');
set('current_path', '/home/blueshift9/domains/d.psweeney.me/public_html/current');


// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

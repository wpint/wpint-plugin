<?php 
namespace App\Providers;

use Wpint\WPAPI\Enqueuer\Enum\EnqueuerScopeEnum;
use Wpint\WPAPI\Metabox\Enum\MetaboxContextEnum;
use Wpint\WPAPI\Metabox\Enum\MetaboxPriorityEnum;
use Wpint\WPAPI\Setting\Enum\OptionGroupEnum;
use Illuminate\Support\ServiceProvider;
use WPINT\Framework\Foundation\Vite;
use Wpint\Support\Facades\WPAPI;
use Wpint\WPAPI\Hook\Enum\HookTypeEnum;
use Wpint\WPAPI\Taxonomy\Enum\TaxonomyCapabilitiesEnum;

class WPServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        // Register your service
    }

    /**
     * Bootstrap any application service
     *
     * @return void
     */
    public function boot(): void
    {

        /**
         * enqueue compiled js and css files
         * default scope is ADMIN
         */
        // WPAPI::enqueuer()
        // ->scope(EnqueuerScopeEnum::ADMIN)
        // ->js(config('enqueue.admin.js'))
        // ->css(config('enqueue.admin.css'))
        // ->register();

        /**
         * e.g: add a custom field to "Settings > Reading" 
         * default option group is OPTIONS
         */
        // WPAPI::setting()
        // ->name('wpint_custom_setting')
        // ->optionGroup(OptionGroupEnum::READING)
        // ->sectionTitle('WPINT Settings Section')
        // ->sectionCallback(function()
        // {
        //     return;
        // })
        // ->fieldtitle('WPINT Setting')
        // ->fieldCallback(function(){
        //     $setting = get_option('wpint_custom_setting');
        //     $setting = isset( $setting ) ? esc_attr( $setting ) : ''; 
        //     echo '<input type="text" name="wpint_custom_setting" value="'. $setting .'">';
        // })->register();
        
 
        /**
         * e.g: add a custom shortcode
         */
        // WPAPI::shortcode()
        // ->tag('shortcode_1')
        // ->callback(function($atts = [], $content = null){
        //     $content = "WPINT CUSTOM SHORTCODE";
        //     return $content;
        // })->register();

        
        /**
         * e.g: add a custom post type
         */
        WPAPI::postType()
        ->id('wpint')
        ->public()
        ->register();

        /**
         * e.g: add a custom taxonomy
         */
         WPAPI::taxonomy()
        ->name('wpint')
        ->public()
        ->showQuickEdit()
        ->hierarchical()
        ->posttype('wpint')
        ->register();
        
        /**
         * add a custom cron interval
         */
        // WPAPI::cron()
        // ->addCronInterval('five_sec', 5, 'DO THIS EVERY 5 SEC');

        /**
         * add a custom cron job
         */
        // WPAPI::cron()
        // ->name('wpint_cron')
        // ->start(time())
        // ->every('five_sec')
        // ->execute(function(){
        //     $times = get_option('wpint_cron', 0);
        //     update_option('wpint_cron', $times + 1);
        // })
        // ->register();
            
        /**
         * add a custom metabox
         * default context is ADVANCES | default priority is DEFAULT
         */
        // WPAPI::metabox()
        // ->id('wpint_metabox')
        // ->title('This is custom wpint metabox')
        // ->priority(MetaboxPriorityEnum::DEFAULT)
        // ->context(MetaboxContextEnum::ADVANCES)
        // ->callback(function($post, $args)
        // {
        //     $value = get_post_meta( $post->ID, 'wpint_meta', true );
        //     echo '<input name="wpint_meta" value="'.$value.'"  placeholder="write sth" />';
        // })
        // ->screen('wpint')
        // ->metaKey('wpint_meta')
        // ->postKey('wpint_meta')
        // ->register();

        /**
         * add a custom Hook (action or filter ) 
         * default type is ACTION 
         */
        // WPAPI::hook()
        // ->name('the_content')
        // ->type(HookTypeEnum::FILTER)
        // ->callback(function($content)
        // {
        //     return $content . ' <br> This is a custom hook';
        // })
        // ->register();
    
    }

}
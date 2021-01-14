<?php
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Repeater;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ES_Elementor_Slider extends Widget_Base{
    
    /**
     * Widget Pricing Table
     *
     * Holds the Repeater counter data. Default is `0`.
     *
     * @since 1.0.0
     * @static
     *
     * @var int Widget Name.
     */
    public function get_name() {
        return 'es_slider';
    }
    
    /**
     * Widget Title.
     *
     * Holds the Repeater counter data. Default is `0`.
     *
     * @since 1.0.0
     * @static
     *
     * @var int Widget Title.
     */
    public function get_title() {
        return __( 'Slider Swipper', 'medilac' );
    }
  
    /**
     * Help URL
     *
     * @since 1.0.0
     *
     * @var int Widget Icon.
     */
    public function get_custom_help_url() {
            return 'https://example.com/Medilac_Counter';
    }
    
    /**
     * Widget Icon.
     *
     * Holds the Repeater counter data. Default is `0`.
     *
     * @since 1.0.0
     * @static
     *
     * @var int Widget Icon.
     */
    public function get_icon() {
        return 'eicon-elementor-circle';
    }
    
    /**
     * Get your widget name
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string keywords
     */
    public function get_keywords() {
        return [ 'es_slider', 'slider', 'swipper', 'swip', 'slide'];
    }
    /**
     * Widget Category.
     *
     * Holds the Repeater counter data. Default is `0`.
     *
     * @since 1.0.0
     * @static
     *
     * @var int Widget Category.
     */
    public function get_categories() {
        return [ 'basic' ];
    }
    
    
    
    /**
     * Register oEmbed widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {
        

        //For General Section
        $this->content_general_controls();

        //For Design Section Style Tab
        //$this->style_design_controls();
        
        //For Typography Section Style Tab
        //$this->style_typography_controls();

       
    }
    
    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        
        $settings           = $this->get_settings_for_display();

        $this->add_render_attribute( 'wrapper', 'class', 'saiful' );

        
        ?>
    <div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
        
        <h1>Saiful Swipper Slider</h1>
        
        <div class="saiful-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div> 
</div>
    <script>
//    var swiper = new Swiper('.swiper-container', {
//        effect: 'cube',
//        grabCursor: true,
//        cubeEffect: {
//          shadow: true,
//          slideShadows: true,
//          shadowOffset: 20,
//          shadowScale: 0.94,
//        },
//        autoplay: {
//            delay: 1000,
//        },
//        speed: 1200,
//        pagination: '.swiper-pagination',
//        paginationClickable: true
//    });
//    
//    console.log(swiper);
//    swiper.autoplay.stop();

//var swiper = new Swiper('.swiper-container', {
//    effect: 'cube',
//    grabCursor: true,
//    cubeEffect: {
//      shadow: true,
//      slideShadows: true,
//      shadowOffset: 20,
//      shadowScale: 0.94,
//    },
//    autoplay: {
//        delay: 1000,
//    },
//    loop: true,
//    speed: 1200,
//    pagination: '.swiper-pagination',
//    paginationClickable: true
//});
//
//console.log(swiper);
//console.log(swiper.bullets);
//
//;(function ($, w) {
//    "use strict";
//    $.fn.getMedilacSettings = function() {
//            return this.data('settings');
//    };
//    var new_data = $('.elementor-widget-es_slider').getMedilacSettings();
//
//}(jQuery, window));


    </script>   
        
    </div>
        <?php
        
    }
    
    
    /**
     * General Section for Content Controls
     * 
     * @since 1.0.0.9
     */
    protected function content_general_controls() {
        $this->start_controls_section(
            'general_content',
            [
                'label'     => esc_html__( 'Slider Options', 'medilac' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        

        $this->add_control(
                'navigation',
                [
                        'label' => __( 'Navigation', 'medilac' ),
                        'type' => Controls_Manager::SELECT,
                        'default' => 'both',
                        'options' => [
                                'both' => __( 'Arrows and Dots', 'medilac' ),
                                'arrows' => __( 'Arrows', 'medilac' ),
                                'dots' => __( 'Dots', 'medilac' ),
                                'none' => __( 'None', 'medilac' ),
                        ],
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'autoplay',
                [
                        'label' => __( 'Autoplay', 'medilac' ),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'yes',
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'pause_on_hover',
                [
                        'label' => __( 'Pause on Hover', 'medilac' ),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'yes',
                        'frontend_available' => true,
                        'condition' => [
                                'autoplay!' => '',
                        ],
                ]
        );

        $this->add_control(
                'pause_on_interaction',
                [
                        'label' => __( 'Pause on Interaction', 'medilac' ),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'yes',
                        'frontend_available' => true,
                        'condition' => [
                                'autoplay!' => '',
                        ],
                ]
        );

        $this->add_control(
                'speed',
                [
                        'label' => __( 'Speed', 'medilac' ),
                        'type' => Controls_Manager::NUMBER,
                        'default' => 5000,
                        'condition' => [
                                'autoplay' => 'yes',
                        ],
                        'selectors' => [
                                '{{WRAPPER}} .swiper-slide' => 'transition-duration: calc({{VALUE}}ms*1.2)',
                        ],
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'infinite',
                [
                        'label' => __( 'Infinite Loop', 'medilac' ),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'yes',
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'transition',
                [
                        'label' => __( 'Transition', 'medilac' ),
                        'type' => Controls_Manager::SELECT,
                        'default' => 'slide',
                        'options' => [
                                'slide' => __( 'Slide', 'medilac' ),
                                'fade' => __( 'Fade', 'medilac' ),
                        ],
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'transition_speed',
                [
                        'label' => __( 'Transition Speed', 'medilac' ) . ' (ms)',
                        'type' => Controls_Manager::NUMBER,
                        'default' => 500,
                        'frontend_available' => true,
                ]
        );

        $this->add_control(
                'content_animation',
                [
                        'label' => __( 'Content Animation', 'medilac' ),
                        'type' => Controls_Manager::SELECT,
                        'default' => 'fadeInUp',
                        'options' => [
                                '' => __( 'None', 'medilac' ),
                                'fadeInDown' => __( 'Down', 'medilac' ),
                                'fadeInUp' => __( 'Up', 'medilac' ),
                                'fadeInRight' => __( 'Right', 'medilac' ),
                                'fadeInLeft' => __( 'Left', 'medilac' ),
                                'zoomIn' => __( 'Zoom', 'medilac' ),
                        ],
                ]
        );

        
        $this->end_controls_section();
    }
    
    /**
     * Alignment Section for Style Tab
     * 
     * @since 1.0.0.9
     */
    protected function style_design_controls() {
        $this->start_controls_section(
            'style_general',
            [
                'label'     => esc_html__( 'Design', 'medilac' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        
        
        $this->add_responsive_control(
            'list-column',
                [
                    'label'         => esc_html__( 'Column', 'medilac' ),
                    'type'          => Controls_Manager::SELECT,
                    'options' => [
                            '100%'     => __( 'One Column', 'medilac' ),
                            '50%'     => __( 'Two Column', 'medilac' ),
                            '33.33%'     => __( 'Three Column', 'medilac' ),
                            '25%'     => __( 'Four Column', 'medilac' ),
                    ],
                    'default' => '50%',
                    'selectors' => [
                                        '{{WRAPPER}} .mc-counter-wrapper .mc-counter-item' => 'width: {{VALUE}};',
                                ],
                ]
        );
        
        
        $this->add_responsive_control(
                'padding',
                [
                        'label' => __( 'Padding', 'medilac' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%' ],
                        'default'   => [
                                'size' => 0,
                                'unit' => 'px',
                        ],
                        'selectors' => [
                                '{{WRAPPER}} .mc-counter-item .mc-counter-item-inside' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                ]
        );
//        
//        $this->add_responsive_control(
//                'margin',
//                [
//                        'label' => __( 'Margin', 'medilac' ),
//                        'type' => Controls_Manager::DIMENSIONS,
//                        'size_units' => [ 'px', '%' ],
//                        'default'   => [
//                                'size' => 55,
//                                'unit' => 'px',
//                        ],
//                        'selectors' => [
//                                '{{WRAPPER}} .mc-list-items li.list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
//                        ],
//                ]
//        );
//        
        $this->end_controls_section();
    }
    
    /**
     * Typography Section for Style Tab
     * 
     * @since 1.0.0.9
     */
    protected function style_typography_controls() {
        $this->start_controls_section(
            'typography',
            [
                'label'     => esc_html__( 'Typography', 'medilac' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        
        
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                        'name' => 'int_typography',
                        'label' => 'Number Typography',
                        'selector' => '{{WRAPPER}} .mc-counter-wrapper .mc-counter-value,{{WRAPPER}} .mc-counter-wrapper .mc-counter-pluss',
//                        'global' => [
//                                'default' => Global_Typography::TYPOGRAPHY_ACCENT,
//                        ],

                ]
        );
        
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                        'name' => 'label_typography',
                        'label' => 'Label Typography',
                        'selector' => '{{WRAPPER}} .mc-counter-wrapper .mc-counter-text .me-counter-label',
//                        'global' => [
//                                'default' => Global_Typography::TYPOGRAPHY_ACCENT,
//                        ],

                ]
        );
        
        
        $this->end_controls_section();
    }
       
    
}
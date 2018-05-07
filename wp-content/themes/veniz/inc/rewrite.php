<?php

/**
 * class rewrite url
 */
class rewrite {

  /**
   * Constructor function.
   **/
  function __construct() {
    add_action('init', array($this, 'flush_rewrite_rules'));
    add_filter('post_type_link', array($this, 'post_type_link'), 10, 3);
    add_filter('post_link', array($this, 'post_type_link'), 10, 3);
    add_filter('term_link', array($this, 'term_link'), 1, 3);
    add_action('generate_rewrite_rules', array(
      $this,
      'create_custom_rewrite_rules'
    ));
    add_filter('query_vars', array($this, 'add_custom_page_variables'));
  } // End constructor

  /**
   * rewrite post type url
   */
  function post_type_link($permalink, $post, $leavename) {

    switch ($post->post_type) {
      case 'carte' :
        $permalink = $this->rewrite_permalink($post, $permalink);
        break;
      case 'auberge':
          $permalink = str_replace('auberge/', 'hotel/', $permalink);
          break;
    }

    return $permalink;
  }

  /**
   * Fonction qui permet de change l'url des divers post_type le pays rattaché.
   */
  function rewrite_permalink($post, $permalink) {
      
    $genre_associe = wp_get_post_terms($post->ID, 'genre', array('fields' => 'ids'));
    if (isset($genre_associe) && count($genre_associe) > 0) {
        $genre_associe = get_term_by('term_id', $genre_associe[0], 'genre');
        $permalink = str_replace('carte/', $genre_associe->slug . '/', $permalink);
    }
      
    return $permalink;
  }

  /**
   * Fonction qui permet de change l'url des pays et metiers.
   */
  function term_link($termlink, $term, $taxonomy) {
    global $statut;

    /*switch ($taxonomy) {
      case 'genre' :
        $termlink = str_replace('genre/','agenda/',$termlink);
        break;
    }*/

    return $termlink;
  }

  /**
   * create_custom_rewrite_rules()
   * Creates the custom rewrite rules.
   * return array $rules.
   **/
  public function create_custom_rewrite_rules() {
    global $wp_rewrite;

    remove_action('template_redirect', 'redirect_canonical');
    
    $tmp = explode('/', $_SERVER['REQUEST_URI']);
    array_shift($tmp);
    array_pop($tmp);
    array_pop($tmp);

    $tax      = end($tmp);    
    $tax_genre = get_term_by('slug', $tax, 'genre');

    if (isset($tax_genre->term_id) && $tax_genre->term_id > 0) {
        // Define custom rewrite tokens
        $post_type = '%posttype%';

        // Add the rewrite tokens
        $wp_rewrite->add_rewrite_tag($post_type, '(.+?)', 'post_type=carte');

        // Define the custom permalink structure
        $rewrite_keywords_structure = $wp_rewrite->root . "{$tax}/%carte%/";

        // Generate the rewrite rules
        $new_rule = $wp_rewrite->generate_rewrite_rules( $rewrite_keywords_structure, EP_NONE, false,false,false,false,false	 );

        $wp_rewrite->rules = $new_rule + $wp_rewrite->rules;
       
    } elseif (preg_match("#.*?\/(hotel)\/(.+?)\/$#", $_SERVER['REQUEST_URI'])) {
         // Define custom rewrite tokens
        $post_type = '%posttype%';

        // Add the rewrite tokens
        $wp_rewrite->add_rewrite_tag($post_type, '(.+?)', 'post_type=auberge');

        // Define the custom permalink structure
        $rewrite_keywords_structure = $wp_rewrite->root . "hotel/%auberge%/";

        // Generate the rewrite rules
        $new_rule = $wp_rewrite->generate_rewrite_rules( $rewrite_keywords_structure, EP_NONE, false,false,false,false,false	 );

        $wp_rewrite->rules = $new_rule + $wp_rewrite->rules;
    }
    
    return $wp_rewrite->rules;
  } // End create_custom_rewrite_rules()

  /**
   * add_custom_page_variables()
   * Add the custom token as an allowed query variable.
   * return array $public_query_vars.
   **/
  public function add_custom_page_variables($public_query_vars) {
    $public_query_vars[] = 'mois';
    $public_query_vars[] = 'annee';
    $public_query_vars[] = 'jour';

    return $public_query_vars;
  } // End add_custom_page_variables()

  /**
   * flush_rewrite_rules()
   * Flush the rewrite rules, which forces the regeneration with new rules.
   * return void.
   **/
  public function flush_rewrite_rules() {
    global $wp_rewrite;

    $wp_rewrite->flush_rules();
  } // End flush_rewrite_rules()
}

new rewrite();
?>
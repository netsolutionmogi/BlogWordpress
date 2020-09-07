<form role="search" method="get" class="navbar-form navbar-left" action="<?php echo home_url( '/' ); ?>">
    <label>
        <div class="form-group">
        <input type="search" class="form-control" placeholder="Digite a pesquisa"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            </div>
    </label>
    <input type="submit" class="btn btn-danger"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <label>
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <div class="search-container">
      <input
        type="search"
        placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
        value="{{ get_search_query() }}"
        name="s"
        class="search-input"
      >
      <button type="submit" class="search-button">
        <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
      </button>
    </div>
  </label>
</form>

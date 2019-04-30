#Gutenberg theme options

Gutenberg allows us to override or enhance some of the core block options and the way content is displayed in the editor to more closely match the desired theme output on the front end of the site.

For the official documentation, see: [https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/](https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/)

## Theme Hooks
- The gutenberg styles are added via the `after_theme_setup` hook
- You can add these options to the theme setup function, but for this demo I've made a separate theme hooks file.
- You'll also want to make sure that your custom theme styles are available on the front end. In this case, I've enqueued them in their own `post-content` css file.

## Add theme support for custom editor styles
- This flag is required if you want to enqueue an editor stylesheet or use the gutenberg dark mode.

## Add Custom Editor Style
- The `add_editor_style` function will enqueue a stylesheet in the editor and can be used to apply custom theme styles to the preview.
- Because of the way the gutenberg editor enqueues styles, it will transform your `body` selectors to target the `.editor-styles-wrapper` for the editor view.

## Editor Color Palatte
- Allows for specific color options to be added to the editor.
- These colors will preview correctly in the editor, but require theme styles to be written to display them on the front end.

## Custom Theme Colors
- The custom block color picker allows any color to be added to a block via an inline style. This will display in both the editor and the front end without the need for custom theme css.
- The custom block colors option can also be disabled.

## Editor Named Font Sizes
- This allows you to override the default font sizes used by the editor and also add your own.
- Font sizes will preview correctly in this view, but theme styles need to be written to display them on the front end.

## Custom Font Sizes
- The custom font size picker allows you to add font sizes to blocks with an inline style.
- These font sizes will display in both the editor and the front end without the need for custom theme styles.

## Default block styles
- Styles for some core blocks are only enqueued in the editor, this option will enqueue them on the front end as well. Includes styles for blockquotes, tables and code blocks, for example.

## Responsive Embeds
- To make responsive embeds work, enable this flag which will add a selector to the body tag.

## Align Wide
- To make wide and full width blocks available (for example on images), enable this flag.

## Dark Mode
- Changes the UI of the Gutenberg editor for dark backgrounds.
- Requires authoring custom editor styles.


# Simple HTML DOM Parser

Fork of the abandoned **[shark/simple_html_dom](https://github.com/samacs/simple_html_dom)** library.

* Verified for PHP versions up to 7.4, but it should work with PHP 8.x as well.

## Installation

You can install the library using Composer. It is a drop-in replacement for the original `shark/simple_html_dom` library, so you have to include the following repository in your `composer.json` file:

```json
{
	"repositories": [
		{
			"type": "git",
			"url": "https://github.com/abandoned-packages/simple_html_dom.git"
		}
	]
}
```

Then run the following command to install the library:

```bash
composer require shark/simple-html-dom
```

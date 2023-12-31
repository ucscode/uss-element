# UssElement 

A PHP Library for Effortless HTML Generation (Package From [User Synthetics](https://github.com/ucscode/user-synthetics))

### Description:

UssElement is a powerful PHP library designed to simplify the process of building and manipulating HTML elements in your web applications. With UssElement, you can effortlessly create DOM nodes, set attributes, define content, and generate HTML strings with ease. Streamline your PHP-based web development workflow and save time when constructing dynamic and interactive web pages.

### Key Features:

- Create HTML elements using PHP code.
- Set element attributes, such as class names and IDs.
- Define inner HTML content for elements.
- Generate HTML strings with the `UssElement::getHTML()` method.
- Boost your productivity by simplifying HTML generation in PHP.

### Installation (Composer)

You can include UssElement in your project using Composer:

```bash
composer require ucscode/uss-element
```

### Getting Started:

- Instantiate the UssElement class with the desired HTML element type (e.g., `UssElement::NODE_DIV`).
- Use UssElement methods to set attributes and content.
- Generate HTML strings with `UssElement::getHTML()` for seamless integration into your web pages.

### Example:

```php
use Ucscode\UssElement\UssElement;

// Create Elements

$div = new UssElement(UssElement::NODE_DIV);
$span = new UssElement(UssElement::NODE_SPAN);

// Modify Elements

$div->setAttribute('class', 'container');
$span->setAttribute('style', "color: red;");
$span->setContent("Hello world!");

// Organize Element

$div->appendChild($span);

// Generate and output HTML string

echo $div->getHTML(true); // true to indent html output
```

## Inquiry

But why use this over the default PHP `DOMDocument`? <br>

UssElement not only provides out of the box methods and concept but is prepared for ultimate future increase. The default DOMDocument uses methods that are similar to that of Javascript and nothing more. There are also maximized limitation like being unable to directly insert `innerHTML` into your document context.

With UssElement, you can do all that and even more. For example, you can set the visibility of an element to render with other element or not.

```php
$div->appendChild($span);
$span->setInvisible(true);
```

In the above example, span is a child of div and always will be unless removed. However, when the content is rendered in HTML, the span element will be absent, giving you the ability to control the element visiblity without actually removing the element.

## Methods

<table>
  <thead>
    <tr>
      <th>Method</th>
      <th>Returns</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>isVoid()</code></td>
      <td><code>bool</code></td>
      <td>Indicates whether the element should have a closing tag or not (true means no closing tag).</td>
    </tr>
    <tr>
      <td><code>hasAttribute($attr)</code></td>
      <td><code>bool</code></td>
      <td>Checks if an attribute exists on the element.</td>
    </tr>
    <tr>
      <td><code>hasAttributeValue($attr, $value)</code></td>
      <td><code>bool</code></td>
      <td>Checks if an attribute has a particular value.</td>
    </tr>
    <tr>
      <td><code>getAttribute($attr)</code></td>
      <td><code>?string</code></td>
      <td>Gets the value of an attribute.</td>
    </tr>
    <tr>
      <td><code>addAttributeValue($attr, $value)</code></td>
      <td><code>self</code></td>
      <td>Appends a value to an attribute.</td>
    </tr>
    <tr>
      <td><code>removeAttributeValue($attr, $value)</code></td>
      <td><code>self</code></td>
      <td>Removes a value from an attribute.</td>
    </tr>
    <tr>
      <td><code>removeAttribute($attr)</code></td>
      <td><code>self</code></td>
      <td>Removes an attribute from the element.</td>
    </tr>
    <tr>
      <td><code>setContent($content)</code></td>
      <td><code>self</code></td>
      <td>Sets the inner HTML content of the element.</td>
    </tr>
    <tr>
      <td><code>hasContent()</code></td>
      <td><code>bool</code></td>
      <td>Checks if the element has inner HTML content.</td>
    </tr>
    <tr>
      <td><code>getContent()</code></td>
      <td><code>string</code></td>
      <td>Gets the inner HTML content of the element.</td>
    </tr>
    <tr>
      <td><code>appendChild($child)</code></td>
      <td><code>void</code></td>
      <td>Appends a child element to the current element.</td>
    </tr>
    <tr>
      <td><code>prependChild($child)</code></td>
      <td><code>void</code></td>
      <td>Prepends a child element to the current element.</td>
    </tr>
    <tr>
      <td><code>insertBefore($child, $refNode)</code></td>
      <td><code>void</code></td>
      <td>Inserts a child element before a specified reference element.</td>
    </tr>
    <tr>
      <td><code>insertAfter($child, $refNode)</code></td>
      <td><code>void</code></td>
      <td>Inserts a child element after a specified reference element.</td>
    </tr>
    <tr>
      <td><code>replaceChild($child, $refNode)</code></td>
      <td><code>void</code></td>
      <td>Replaces a child element with another element.</td>
    </tr>
    <tr>
      <td><code>firstChild()</code></td>
      <td><code>?UssElement</code></td>
      <td>Returns the first child element of the current element.</td>
    </tr>
    <tr>
      <td><code>lastChild()</code></td>
      <td><code>?UssElement</code></td>
      <td>Returns the last child element of the current element.</td>
    </tr>
    <tr>
      <td><code>getChild($index)</code></td>
      <td><code>?UssElement</code></td>
      <td>Returns a child element at a specified index.</td>
    </tr>
    <tr>
      <td><code>removeChild($child)</code></td>
      <td><code>void</code></td>
      <td>Removes a child element from the current element.</td>
    </tr>
    <tr>
      <td><code>getHTML($indent = false)</code></td>
      <td><code>string</code></td>
      <td>Generates an HTML string representation of the element and its children.</td>
    </tr>
  </tbody>
</table>

---

## 💖 Support

If you find UssElement helpful and would like to support its development and maintenance, you can make a donation. <br>
Your contribution helps ensure the continued improvement and sustainability of this project.

### Ways to Donate

- **Bitcoin**: You can also contribute with Bitcoin by sending to our Bitcoin wallet address: `bc1q22zymcsq9t7m9fdwau3dqcpme2szvgnzkqyjza`.

---

**Note:** UssElement is an open-source project, and contributions are voluntary. Donations are not tax-deductible.

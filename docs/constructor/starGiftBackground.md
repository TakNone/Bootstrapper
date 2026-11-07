# starGiftBackground

**Description** : *Contains the default background palette of a gift type &raquo;*

**Layer** : 233

```tl
starGiftBackground#aff56398 center_color:int edge_color:int text_color:int = StarGiftBackground;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>center_color</mark> | [`int`](type/int) | Center color of the background palette, in RGB24 format |
| <mark>edge_color</mark> | [`int`](type/int) | Edge color of the background palette, in RGB24 format |
| <mark>text_color</mark> | [`int`](type/int) | Text color to use on top of the background palette, in RGB24 format |

---

## Type

[StarGiftBackground](type/StarGiftBackground)

---

## Example

```php
$starGiftBackground = $client->starGiftBackground(
	center_color : 66,
	edge_color : 90,
	text_color : 17,
);
```
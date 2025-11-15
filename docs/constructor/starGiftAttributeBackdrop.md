# starGiftAttributeBackdrop

**Description** : *The backdrop of a collectible gift &raquo;*

**Layer** : 216

```tl
starGiftAttributeBackdrop#d93d859c name:string backdrop_id:int center_color:int edge_color:int pattern_color:int text_color:int rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Name of the backdrop |
| <mark>backdrop_id</mark> | [`int`](type/int) | Unique ID of the backdrop |
| <mark>center_color</mark> | [`int`](type/int) | Color of the center of the backdrop in RGB24 format |
| <mark>edge_color</mark> | [`int`](type/int) | Color of the edges of the backdrop in RGB24 format |
| <mark>pattern_color</mark> | [`int`](type/int) | Color of the starGiftAttributePattern applied on the backdrop in RGB24 format |
| <mark>text_color</mark> | [`int`](type/int) | Color of the text on the backdrop in RGB24 format |
| <mark>rarity_permille</mark> | [`int`](type/int) | The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeBackdrop(
	name : 'qWmUPVR1Fl2cdzpD',
	backdrop_id : 11,
	center_color : 74,
	edge_color : 98,
	pattern_color : 95,
	text_color : 59,
	rarity_permille : 84,
);
```
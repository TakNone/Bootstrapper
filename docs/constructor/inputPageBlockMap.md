# inputPageBlockMap

**Layer** : 227

```tl
inputPageBlockMap#574b617f geo:InputGeoPoint zoom:int w:int h:int caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo</mark> | [`InputGeoPoint`](type/InputGeoPoint) | NOTHING |
| <mark>zoom</mark> | [`int`](type/int) | NOTHING |
| <mark>w</mark> | [`int`](type/int) | NOTHING |
| <mark>h</mark> | [`int`](type/int) | NOTHING |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | NOTHING |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->inputPageBlockMap(
	geo : $client->inputGeoPointEmpty(),
	zoom : 22,
	w : 98,
	h : 10,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```
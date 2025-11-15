# pageBlockMap

**Description** : *A map*

**Layer** : 216

```tl
pageBlockMap#a44f3ef6 geo:GeoPoint zoom:int w:int h:int caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Location of the map center |
| <mark>zoom</mark> | [`int`](type/int) | Map zoom level; 13-20 |
| <mark>w</mark> | [`int`](type/int) | Map width in pixels before applying scale; 16-102 |
| <mark>h</mark> | [`int`](type/int) | Map height in pixels before applying scale; 16-1024 |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | Caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockMap(
	geo : $client->geoPointEmpty(),
	zoom : 52,
	w : 29,
	h : 46,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```
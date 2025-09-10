# starGiftAttributePattern

**Layer** : 214

```tl
starGiftAttributePattern#13acff19 name:string document:Document rarity_permille:int = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>document</mark> | [`Document`](type/Document) | NOTHING |
| <mark>rarity_permille</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributePattern(
	name : '1ML34goUb0qkhizY',
	document : $client->documentEmpty(
		id : -5631048311321836057,
	),
	rarity_permille : 73,
);
```
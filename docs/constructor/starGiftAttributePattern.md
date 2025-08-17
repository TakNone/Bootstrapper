# starGiftAttributePattern

**Layer** : 211

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
	name : 'BWmH8GcOQe4ZCjrn',
	document : $client->documentEmpty(
		id : 6613133549311256194,
	),
	rarity_permille : 44,
);
```
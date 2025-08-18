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
	name : 'U8qCJNuZpc7tR5ob',
	document : $client->documentEmpty(
		id : 5009653423914270382,
	),
	rarity_permille : 17,
);
```
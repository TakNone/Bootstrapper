# starGiftAttributeCounter

**Layer** : 211

```tl
starGiftAttributeCounter#2eb1b658 attribute:StarGiftAttributeId count:int = StarGiftAttributeCounter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>attribute</mark> | [`StarGiftAttributeId`](type/StarGiftAttributeId) | NOTHING |
| <mark>count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[StarGiftAttributeCounter](type/StarGiftAttributeCounter)

---

## Example

```php
$starGiftAttributeCounter = $client->starGiftAttributeCounter(
	attribute : $client->starGiftAttributeIdModel(
		document_id : -2286934642901264478,
	),
	count : 16,
);
```
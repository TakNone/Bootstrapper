# starGiftAttributeCounter

**Description** : *Indicates the total number of gifts that have the specified attribute*

**Layer** : 225

```tl
starGiftAttributeCounter#2eb1b658 attribute:StarGiftAttributeId count:int = StarGiftAttributeCounter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>attribute</mark> | [`StarGiftAttributeId`](type/StarGiftAttributeId) | The attribute (just the ID, without the attribute itself) |
| <mark>count</mark> | [`int`](type/int) | Total number of gifts with this attribute |

---

## Type

[StarGiftAttributeCounter](type/StarGiftAttributeCounter)

---

## Example

```php
$starGiftAttributeCounter = $client->starGiftAttributeCounter(
	attribute : $client->starGiftAttributeIdModel(
		document_id : -1244721633155118837,
	),
	count : 47,
);
```
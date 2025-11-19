# starGiftAttributeCounter

**Description** : *Indicates the total number of gifts that have the specified attribute*

**Layer** : 218

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
		document_id : -148568480969672019,
	),
	count : 53,
);
```
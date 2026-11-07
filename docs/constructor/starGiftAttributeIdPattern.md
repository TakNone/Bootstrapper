# starGiftAttributeIdPattern

**Description** : *The ID of a pattern of a collectible gift &raquo;*

**Layer** : 229

```tl
starGiftAttributeIdPattern#4a162433 document_id:long = StarGiftAttributeId;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | The sticker representing the symbol |

---

## Type

[StarGiftAttributeId](type/StarGiftAttributeId)

---

## Example

```php
$starGiftAttributeId = $client->starGiftAttributeIdPattern(
	document_id : -2733303643861754469,
);
```
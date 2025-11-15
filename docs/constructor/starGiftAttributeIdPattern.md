# starGiftAttributeIdPattern

**Description** : *The ID of a pattern of a collectible gift &raquo;*

**Layer** : 218

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
	document_id : 114107675653917408,
);
```
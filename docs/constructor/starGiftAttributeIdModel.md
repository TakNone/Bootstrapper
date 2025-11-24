# starGiftAttributeIdModel

**Description** : *The ID of a model of a collectible gift &raquo;*

**Layer** : 218

```tl
starGiftAttributeIdModel#48aaae3c document_id:long = StarGiftAttributeId;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | The sticker representing the upgraded gift |

---

## Type

[StarGiftAttributeId](type/StarGiftAttributeId)

---

## Example

```php
$starGiftAttributeId = $client->starGiftAttributeIdModel(
	document_id : 7181066459915357300,
);
```
# messageActionSuggestedPostSuccess

**Layer** : 211

```tl
messageActionSuggestedPostSuccess#95ddcf69 price:StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestedPostSuccess(
	price : $client->starsAmount(
		amount : 8407441536452553121,
		nanos : 37,
	),
);
```
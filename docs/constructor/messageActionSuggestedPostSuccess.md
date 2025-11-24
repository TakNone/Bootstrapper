# messageActionSuggestedPostSuccess

**Description** : *A suggested post &raquo; was successfully posted, and payment for it was successfully received*

**Layer** : 218

```tl
messageActionSuggestedPostSuccess#95ddcf69 price:StarsAmount = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | The price |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestedPostSuccess(
	price : $client->starsAmount(
		amount : -1778177683182976390,
		nanos : 99,
	),
);
```
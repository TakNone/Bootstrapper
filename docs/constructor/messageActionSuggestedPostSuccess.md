# messageActionSuggestedPostSuccess

**Description** : *A suggested post &raquo; was successfully posted, and payment for it was successfully received*

**Layer** : 229

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
		amount : -4633147685991430495,
		nanos : 50,
	),
);
```
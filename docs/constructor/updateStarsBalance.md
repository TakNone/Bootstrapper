# updateStarsBalance

**Description** : *The current account&#039;s Telegram Stars balance &raquo; has changed*

**Layer** : 225

```tl
updateStarsBalance#4e80a379 balance:StarsAmount = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>balance</mark> | [`StarsAmount`](type/StarsAmount) | New balance |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStarsBalance(
	balance : $client->starsAmount(
		amount : -8062185116875403413,
		nanos : 40,
	),
);
```
# updateStarsBalance

**Description** : *The current account&#039;s Telegram Stars balance &raquo; has changed*

**Layer** : 227

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
		amount : -8502484292063913659,
		nanos : 37,
	),
);
```
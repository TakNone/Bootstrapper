# updateStarsBalance

**Description** : *The current account&#039;s Telegram Stars balance &raquo; has changed*

**Layer** : 222

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
		amount : -172353382082486489,
		nanos : 32,
	),
);
```
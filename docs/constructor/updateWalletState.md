# updateWalletState

**Layer** : 233

```tl
updateWalletState#6ac3f2aa state:WalletState = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>state</mark> | [`WalletState`](type/WalletState) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWalletState(
	state : $client->walletStateEmpty(
		creating : true,
	),
);
```
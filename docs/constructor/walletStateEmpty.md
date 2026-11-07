# walletStateEmpty

**Layer** : 233

```tl
walletStateEmpty#9cb9b2ec flags:# creating:flags.0?true = WalletState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **creating** | [`flags.0?true`](type/true) | NOTHING |

---

## Type

[WalletState](type/WalletState)

---

## Example

```php
$walletState = $client->walletStateEmpty(
	creating : true,
);
```
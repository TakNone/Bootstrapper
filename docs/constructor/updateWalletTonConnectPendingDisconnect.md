# updateWalletTonConnectPendingDisconnect

**Layer** : 233

```tl
updateWalletTonConnectPendingDisconnect#d1ee8199 session_ids:Vector<long> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session_ids</mark> | [`Vector<long>`](type/long) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWalletTonConnectPendingDisconnect(
	session_ids : array(-8410350649096326472),
);
```
# wallet.tonConnectGetPending

**Layer** : 233

```tl
wallet.tonConnectGetPending#11aee065 flags:# dapp_client_id:flags.0?string session_id:flags.1?long = wallet.TonConnectPending;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **dapp_client_id** | [`flags.0?string`](type/string) | NOTHING |
| **session_id** | [`flags.1?long`](type/long) | NOTHING |

---

## Result

[wallet.TonConnectPending](type/wallet.TonConnectPending)

---

## Example

```php
$walletTonConnectPending = $client->wallet->tonConnectGetPending(
	dapp_client_id : 'V8UsPJbrAYwgu0QO',
	session_id : 4790611385097574264,
);
```
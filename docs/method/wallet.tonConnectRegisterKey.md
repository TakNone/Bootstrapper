# wallet.tonConnectRegisterKey

**Layer** : 233

```tl
wallet.tonConnectRegisterKey#338bcf1c session_id:long client_id:string = wallet.TonConnectChallenge;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>client_id</mark> | [`string`](type/string) | NOTHING |

---

## Result

[wallet.TonConnectChallenge](type/wallet.TonConnectChallenge)

---

## Example

```php
$walletTonConnectChallenge = $client->wallet->tonConnectRegisterKey(
	session_id : 7624910696615952064,
	client_id : 'KXJBUxOgbMwikNpL',
);
```
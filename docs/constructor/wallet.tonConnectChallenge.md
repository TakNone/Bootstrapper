# wallet.tonConnectChallenge

**Layer** : 233

```tl
wallet.tonConnectChallenge#4bc89693 challenge:bytes event_id:long = wallet.TonConnectChallenge;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>challenge</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>event_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[wallet.TonConnectChallenge](type/wallet.TonConnectChallenge)

---

## Example

```php
$walletTonConnectChallenge = $client->wallet->tonConnectChallenge(
	challenge : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	event_id : -5836127145204751692,
);
```
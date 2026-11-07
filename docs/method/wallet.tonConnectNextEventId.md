# wallet.tonConnectNextEventId

**Layer** : 233

```tl
wallet.tonConnectNextEventId#775d7244 session_id:long = TonConnectNextEventId;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[TonConnectNextEventId](type/TonConnectNextEventId)

---

## Example

```php
$tonConnectNextEventId = $client->wallet->tonConnectNextEventId(
	session_id : 2355339312727372245,
);
```
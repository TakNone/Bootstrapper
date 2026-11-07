# updateDeleteEphemeralMessages

**Layer** : 233

```tl
updateDeleteEphemeralMessages#56dbfcf8 peer:Peer ids:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>ids</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteEphemeralMessages(
	peer : $client->peerUser(
		user_id : 3033790847424238638,
	),
	ids : array(91),
);
```
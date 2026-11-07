# updateDeleteEphemeralMessages

**Layer** : 229

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
		user_id : -8082174298326363080,
	),
	ids : array(77),
);
```
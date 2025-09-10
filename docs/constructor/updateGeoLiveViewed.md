# updateGeoLiveViewed

**Layer** : 214

```tl
updateGeoLiveViewed#871fb939 peer:Peer msg_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGeoLiveViewed(
	peer : $client->peerUser(
		user_id : 6535321957451560982,
	),
	msg_id : 83,
);
```
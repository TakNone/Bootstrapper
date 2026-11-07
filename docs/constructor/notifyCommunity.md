# notifyCommunity

**Layer** : 229

```tl
notifyCommunity#be376999 community_id:long = NotifyPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[NotifyPeer](type/NotifyPeer)

---

## Example

```php
$notifyPeer = $client->notifyCommunity(
	community_id : 5146561048465939331,
);
```
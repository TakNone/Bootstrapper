# sponsoredPeer

**Layer** : 211

```tl
sponsoredPeer#c69708d3 flags:# random_id:bytes peer:Peer sponsor_info:flags.0?string additional_info:flags.1?string = SponsoredPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>random_id</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| **sponsor_info** | [`flags.0?string`](type/string) | NOTHING |
| **additional_info** | [`flags.1?string`](type/string) | NOTHING |

---

## Type

[SponsoredPeer](type/SponsoredPeer)

---

## Example

```php
$sponsoredPeer = $client->sponsoredPeer(
	random_id : 'I9?8LiveProtoHp=',
	peer : $client->peerUser(
		user_id : 3243038425360186408,
	),
	sponsor_info : 'zBW69H4rKDiYfSCu',
	additional_info : 'RpfdTHWvKq53zFQ2',
);
```
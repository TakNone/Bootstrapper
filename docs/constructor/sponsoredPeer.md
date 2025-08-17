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
	random_id : '????LiveProto\\4Y5',
	peer : $client->peerUser(
		user_id : -4124962238877355323,
	),
	sponsor_info : 'r2JBCyEDXSsikOje',
	additional_info : '8LRnQmb9pys7OTwx',
);
```
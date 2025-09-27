# sponsoredPeer

**Layer** : 214

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
	random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	peer : $client->peerUser(
		user_id : -1702368729284227485,
	),
	sponsor_info : 'vUxVE5suNw6yZOKA',
	additional_info : 'rmpHQWdiExFKtGaD',
);
```
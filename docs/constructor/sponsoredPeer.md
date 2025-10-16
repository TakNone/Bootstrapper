# sponsoredPeer

**Description** : *A sponsored peer*

**Layer** : 216

```tl
sponsoredPeer#c69708d3 flags:# random_id:bytes peer:Peer sponsor_info:flags.0?string additional_info:flags.1?string = SponsoredPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>random_id</mark> | [`bytes`](type/bytes) | ID of the sponsored peer, to be passed to messages.viewSponsoredMessage, messages.clickSponsoredMessage or messages.reportSponsoredMessage (the same methods used for sponsored messages &raquo) |
| <mark>peer</mark> | [`Peer`](type/Peer) | The sponsored peer |
| **sponsor_info** | [`flags.0?string`](type/string) | If set, contains additional information about the sponsor to be shown along with the peer |
| **additional_info** | [`flags.1?string`](type/string) | If set, contains additional information about the sponsored message to be shown along with the peer |

---

## Type

[SponsoredPeer](type/SponsoredPeer)

---

## Example

```php
$sponsoredPeer = $client->sponsoredPeer(
	random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	peer : $client->peerUser(
		user_id : -6427245679697208263,
	),
	sponsor_info : 'Z1jphBnWLqbvgJKt',
	additional_info : 'KGmL6bjylZ9kQFpg',
);
```
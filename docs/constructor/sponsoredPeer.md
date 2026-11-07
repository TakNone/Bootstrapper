# sponsoredPeer

**Description** : *A sponsored peer*

**Layer** : 229

```tl
sponsoredPeer#c69708d3 flags:# random_id:bytes peer:Peer sponsor_info:flags.0?string additional_info:flags.1?string = SponsoredPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>random_id</mark> | [`bytes`](type/bytes) | ID of the sponsored peer, to be passed to messages.viewSponsoredMessage, messages.clickSponsoredMessage or messages.reportSponsoredMessage (the same methods used for sponsored messages &raquo). See here » for more info on random ID deduplication and updateMessageID mapping |
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
		user_id : -7812886128615592539,
	),
	sponsor_info : '60laxwRkve8dNmJp',
	additional_info : '91ntwXpRi2fUAEsy',
);
```
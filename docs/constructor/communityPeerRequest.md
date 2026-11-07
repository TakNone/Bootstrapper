# communityPeerRequest

**Layer** : 233

```tl
communityPeerRequest#7beafa85 flags:# visible:flags.0?true peer:Peer requested_by:long date:int = CommunityPeerRequest;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **visible** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>requested_by</mark> | [`long`](type/long) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[CommunityPeerRequest](type/CommunityPeerRequest)

---

## Example

```php
$communityPeerRequest = $client->communityPeerRequest(
	visible : true,
	peer : $client->peerUser(
		user_id : -3474787366726379544,
	),
	requested_by : -1705904147990635230,
	date : 95,
);
```
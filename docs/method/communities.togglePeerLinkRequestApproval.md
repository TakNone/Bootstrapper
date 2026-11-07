# communities.togglePeerLinkRequestApproval

**Layer** : 233

```tl
communities.togglePeerLinkRequestApproval#8c8219a8 flags:# reject:flags.0?true community:InputChannel peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **reject** | [`flags.0?true`](type/true) | NOTHING |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->communities->togglePeerLinkRequestApproval(
	reject : true,
	community : $client->get_input_channel(channel : '@LiveProto'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```
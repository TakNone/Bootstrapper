# communities.togglePeerLink

**Layer** : 233

```tl
communities.togglePeerLink#736dcfea flags:# visible:flags.0?true hidden:flags.1?true deleted:flags.2?true community:InputChannel peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **visible** | [`flags.0?true`](type/true) | NOTHING |
| **hidden** | [`flags.1?true`](type/true) | NOTHING |
| **deleted** | [`flags.2?true`](type/true) | NOTHING |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->communities->togglePeerLink(
	visible : true,
	hidden : true,
	deleted : true,
	community : $client->get_input_channel(channel : '@LiveProto'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```
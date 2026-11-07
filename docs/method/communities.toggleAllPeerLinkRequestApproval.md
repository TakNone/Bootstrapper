# communities.toggleAllPeerLinkRequestApproval

**Layer** : 229

```tl
communities.toggleAllPeerLinkRequestApproval#bfe3dd3d flags:# reject:flags.0?true community:InputChannel = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **reject** | [`flags.0?true`](type/true) | NOTHING |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->communities->toggleAllPeerLinkRequestApproval(
	reject : true,
	community : $client->get_input_channel(channel : '@LiveProto'),
);
```
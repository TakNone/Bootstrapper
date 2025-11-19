# messages.getGroupCallStreamRtmpUrl

**Layer** : 218

```tl
messages.getGroupCallStreamRtmpUrl#5af4c73a flags:# live_story:flags.0?true peer:InputPeer revoke:Bool = GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **live_story** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>revoke</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[GroupCallStreamRtmpUrl](type/GroupCallStreamRtmpUrl)

---

## Example

```php
$groupCallStreamRtmpUrl = $client->messages->getGroupCallStreamRtmpUrl(
	live_story : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	revoke : true,
);
```
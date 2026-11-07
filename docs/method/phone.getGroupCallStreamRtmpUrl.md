# phone.getGroupCallStreamRtmpUrl

**Description** : *Get the RTMP URL and stream key used by the single external streamer that publishes all audio and video for an RTMP\-mode video chat, livestream or live story*

**Layer** : 233

```tl
phone.getGroupCallStreamRtmpUrl#5af4c73a flags:# live_story:flags.0?true peer:InputPeer revoke:Bool = phone.GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **live_story** | [`flags.0?true`](type/true) | Obtain credentials for an RTMP live story instead of a video chat/livestream |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer that will host the RTMP video chat, livestream or live story |
| <mark>revoke</mark> | [`Bool`](type/Bool) | Whether to invalidate the previous stream key and generate a new one, instead of returning the existing key |

---

## Result

[phone.GroupCallStreamRtmpUrl](type/phone.GroupCallStreamRtmpUrl)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$phoneGroupCallStreamRtmpUrl = $client->phone->getGroupCallStreamRtmpUrl(
	live_story : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	revoke : true,
);
```
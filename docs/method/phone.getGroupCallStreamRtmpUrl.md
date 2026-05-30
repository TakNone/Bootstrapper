# phone.getGroupCallStreamRtmpUrl

**Description** : *Get RTMP URL and stream key for RTMP livestreams\. Can be used even before creating the actual RTMP livestream with phone\.createGroupCall \(the rtmp\_stream flag must be set\)*

**Layer** : 222

```tl
phone.getGroupCallStreamRtmpUrl#5af4c73a flags:# live_story:flags.0?true peer:InputPeer revoke:Bool = phone.GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **live_story** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer to livestream into |
| <mark>revoke</mark> | [`Bool`](type/Bool) | Whether to revoke the previous stream key or simply return the existing one |

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
# phone.getGroupCallStreamRtmpUrl

**Description** : *Get RTMP URL and stream key for RTMP livestreams. Can be used even before creating the actual RTMP livestream with phone.createGroupCall (the rtmp_stream flag must be set)*

**Layer** : 211

```tl
phone.getGroupCallStreamRtmpUrl#deb3abbf peer:InputPeer revoke:Bool = phone.GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
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
	peer : $client->inputPeerEmpty(),
	revoke : $client->boolFalse(),
);
```
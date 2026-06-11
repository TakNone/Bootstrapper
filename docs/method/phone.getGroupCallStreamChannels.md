# phone.getGroupCallStreamChannels

**Description** : *Get info about RTMP streams in a group call or livestream\.
This method should be invoked to the same group/channel\-related DC used for downloading livestream chunks\.
As usual, the media DC is preferred, if available*

**Layer** : 227

```tl
phone.getGroupCallStreamChannels#1ab21940 call:InputGroupCall = phone.GroupCallStreamChannels;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call or livestream |

---

## Result

[phone.GroupCallStreamChannels](type/phone.GroupCallStreamChannels)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_JOIN_MISSING** | `400` | You haven't joined this group call |

---

## Example

```php
$phoneGroupCallStreamChannels = $client->phone->getGroupCallStreamChannels(
	call : $client->inputGroupCall(
		id : 3208231214232454651,
		access_hash : 3770389431117643376,
	),
);
```
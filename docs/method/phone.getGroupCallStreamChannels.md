# phone.getGroupCallStreamChannels

**Description** : *Get the available stream channels and current playback timestamp of an RTMP\-mode video chat, livestream or live story, see here &raquo; for the full flow\.
The group call must be joined before invoking this method\. Send the request to the media DC specified by groupCall\.stream\_dc\_id*

**Layer** : 233

```tl
phone.getGroupCallStreamChannels#1ab21940 call:InputGroupCall = phone.GroupCallStreamChannels;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | RTMP-mode video chat, livestream or live story |

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
		id : 5241543167001030869,
		access_hash : -7782688875315028181,
	),
);
```
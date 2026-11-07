# phone.leaveGroupCallPresentation

**Description** : *Stop screen sharing in a non\-RTMP video chat/livestream or conference\. Presentations are not supported in live stories or RTMP\-mode video chats/livestreams, see here &raquo; for more info*

**Layer** : 229

```tl
phone.leaveGroupCallPresentation#1c50d144 call:InputGroupCall = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call whose presentation connection should be stopped |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->leaveGroupCallPresentation(
	call : $client->inputGroupCall(
		id : 3780360466633738079,
		access_hash : 8307603471910239989,
	),
);
```
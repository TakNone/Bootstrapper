# phone.toggleGroupCallRecord

**Description** : *Start or stop recording a video chat/livestream, see here &raquo; for more info\. The recorded audio and video streams will be automatically sent to Saved Messages \(the chat with ourselves\)*

**Layer** : 229

```tl
phone.toggleGroupCallRecord#f128c708 flags:# start:flags.0?true video:flags.2?true call:InputGroupCall title:flags.1?string video_portrait:flags.2?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **start** | [`flags.0?true`](type/true) | Whether to start or stop recording |
| **video** | [`flags.2?true`](type/true) | Whether to also record video streams |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream to record |
| **title** | [`flags.1?string`](type/string) | Recording title |
| **video_portrait** | [`flags.2?Bool`](type/Bool) | If video stream recording is enabled, whether to record in portrait or landscape mode |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_NOT_MODIFIED** | `400` | Group call settings weren't modified |

---

## Example

```php
$updates = $client->phone->toggleGroupCallRecord(
	start : true,
	video : true,
	call : $client->inputGroupCall(
		id : -4599017113816096460,
		access_hash : 8961714533512852562,
	),
	title : 'zwKMtxR7iUkuOP8J',
	video_portrait : true,
);
```
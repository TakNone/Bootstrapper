# phone.toggleGroupCallRecord

**Description** : *Start or stop recording a group call: the recorded audio and video streams will be automatically sent to Saved messages \(the chat with ourselves\)*

**Layer** : 218

```tl
phone.toggleGroupCallRecord#f128c708 flags:# start:flags.0?true video:flags.2?true call:InputGroupCall title:flags.1?string video_portrait:flags.2?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **start** | [`flags.0?true`](type/true) | Whether to start or stop recording |
| **video** | [`flags.2?true`](type/true) | Whether to also record video streams |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call or livestream |
| **title** | [`flags.1?string`](type/string) | Recording title |
| **video_portrait** | [`flags.2?Bool`](type/Bool) | If video stream recording is enabled, whether to record in portrait or landscape mode |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_NOT_MODIFIED** | `400` | Group call settings weren't modified |

---

## Example

```php
$updates = $client->phone->toggleGroupCallRecord(
	start : true,
	video : true,
	call : $client->inputGroupCall(
		id : 2070621929231982125,
		access_hash : 74990185808433994,
	),
	title : '9QqFZHz8n0TurjIo',
	video_portrait : true,
);
```
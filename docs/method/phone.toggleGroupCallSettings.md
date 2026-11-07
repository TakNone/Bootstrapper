# phone.toggleGroupCallSettings

**Description** : *Change group call settings\. Each setting supports different group call types, see here &raquo; for more info*

**Layer** : 229

```tl
phone.toggleGroupCallSettings#974392f2 flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool messages_enabled:flags.2?Bool send_paid_messages_stars:flags.3?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **reset_invite_hash** | [`flags.1?true`](type/true) | Invalidate existing invite links for video chats, livestreams and conferences |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call whose settings should be changed |
| **join_muted** | [`flags.0?Bool`](type/Bool) | Whether users joining a non-RTMP video chat/livestream should be muted by default |
| **messages_enabled** | [`flags.2?Bool`](type/Bool) | Enable or disable the in-call message overlay in video chats/livestreams, conferences and live stories, including in RTMP mode |
| **send_paid_messages_stars** | [`flags.3?long`](type/long) | Set the minimum Telegram Stars donation required from users other than the live story owner for each comment; the owner may always comment without donating, and 0 allows free comments for everyone |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_CHANGE_FORBIDDEN** | `403` | You cannot change this group call setting |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_NOT_MODIFIED** | `400` | Group call settings weren't modified |

---

## Example

```php
$updates = $client->phone->toggleGroupCallSettings(
	reset_invite_hash : true,
	call : $client->inputGroupCall(
		id : 4420514768942046045,
		access_hash : -1164546215532640052,
	),
	join_muted : true,
	messages_enabled : false,
	send_paid_messages_stars : 7805050890135914234,
);
```
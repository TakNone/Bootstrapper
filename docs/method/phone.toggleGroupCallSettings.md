# phone.toggleGroupCallSettings

**Description** : *Change group call settings*

**Layer** : 227

```tl
phone.toggleGroupCallSettings#974392f2 flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool messages_enabled:flags.2?Bool send_paid_messages_stars:flags.3?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **reset_invite_hash** | [`flags.1?true`](type/true) | Invalidate existing invite links |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| **join_muted** | [`flags.0?Bool`](type/Bool) | Whether all users will that join this group call are muted by default upon joining the group call |
| **messages_enabled** | [`flags.2?Bool`](type/Bool) | NOTHING |
| **send_paid_messages_stars** | [`flags.3?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_NOT_MODIFIED** | `400` | Group call settings weren't modified |

---

## Example

```php
$updates = $client->phone->toggleGroupCallSettings(
	reset_invite_hash : true,
	call : $client->inputGroupCall(
		id : -193681825445020271,
		access_hash : -5785014547579229378,
	),
	join_muted : false,
	messages_enabled : false,
	send_paid_messages_stars : -2827488989127243741,
);
```
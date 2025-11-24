# phone.toggleGroupCallSettings

**Description** : *Change group call settings*

**Layer** : 218

```tl
phone.toggleGroupCallSettings#e9723804 flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool messages_enabled:flags.2?Bool = Updates;
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
		id : -3439630089802457375,
		access_hash : -2304067687415120944,
	),
	join_muted : false,
	messages_enabled : true,
);
```
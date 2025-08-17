# phone.toggleGroupCallSettings

**Description** : *Change group call settings*

**Layer** : 211

```tl
phone.toggleGroupCallSettings#74bbb43d flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **reset_invite_hash** | [`flags.1?true`](type/true) | Invalidate existing invite links |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| **join_muted** | [`flags.0?Bool`](type/Bool) | Whether all users will that join this group call are muted by default upon joining the group call |

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
		id : 953459825116724817,
		access_hash : -5624796660293983676,
	),
	join_muted : $client->boolFalse(),
);
```
# phone.exportGroupCallInvite

**Description** : *Get an invite link for a public video chat/livestream &raquo;*

**Layer** : 229

```tl
phone.exportGroupCallInvite#e6aa647f flags:# can_self_unmute:flags.0?true call:InputGroupCall = phone.ExportedGroupCallInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_self_unmute** | [`flags.0?true`](type/true) | For public video chats/livestreams, group call admins only: allow users that join using this link to speak without explicitly requesting permission, for example by raising their hand |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The public video chat/livestream » |

---

## Result

[phone.ExportedGroupCallInvite](type/phone.ExportedGroupCallInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **PUBLIC_CHANNEL_MISSING** | `403` | You can only export group call invite links for public chats or channels |

---

## Example

```php
$phoneExportedGroupCallInvite = $client->phone->exportGroupCallInvite(
	can_self_unmute : true,
	call : $client->inputGroupCall(
		id : -4062852322697495373,
		access_hash : 5271853820462878921,
	),
);
```
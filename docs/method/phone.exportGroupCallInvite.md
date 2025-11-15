# phone.exportGroupCallInvite

**Description** : *Get an invite link for a group call or livestream*

**Layer** : 216

```tl
phone.exportGroupCallInvite#e6aa647f flags:# can_self_unmute:flags.0?true call:InputGroupCall = phone.ExportedGroupCallInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_self_unmute** | [`flags.0?true`](type/true) | For livestreams or muted group chats, if set, users that join using this link will be able to speak without explicitly requesting permission by (for example by raising their hand) |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |

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
		id : -5756038296846559274,
		access_hash : 8061281762727229730,
	),
);
```
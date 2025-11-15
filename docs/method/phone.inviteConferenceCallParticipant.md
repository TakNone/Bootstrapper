# phone.inviteConferenceCallParticipant

**Description** : *Invite a user to a conference call*

**Layer** : 216

```tl
phone.inviteConferenceCallParticipant#bcf22685 flags:# video:flags.0?true call:InputGroupCall user_id:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.0?true`](type/true) | Invite the user to also turn on their video feed |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The conference call |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to invite |

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
$updates = $client->phone->inviteConferenceCallParticipant(
	video : true,
	call : $client->inputGroupCall(
		id : 506046953618264497,
		access_hash : -3162546201800720878,
	),
	user_id : $client->inputUserEmpty(),
);
```
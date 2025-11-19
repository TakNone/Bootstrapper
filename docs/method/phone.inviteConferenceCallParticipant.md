# phone.inviteConferenceCallParticipant

**Description** : *Invite a user to a conference call*

**Layer** : 218

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
		id : 2208349762353663708,
		access_hash : -2670201762252530732,
	),
	user_id : $client->get_input_user(user : '@TakNone'),
);
```
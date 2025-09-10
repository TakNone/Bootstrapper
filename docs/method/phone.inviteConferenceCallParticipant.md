# phone.inviteConferenceCallParticipant

**Layer** : 214

```tl
phone.inviteConferenceCallParticipant#bcf22685 flags:# video:flags.0?true call:InputGroupCall user_id:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **video** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->inviteConferenceCallParticipant(
	video : true,
	call : $client->inputGroupCall(
		id : -5482305061139827390,
		access_hash : -142142403672116147,
	),
	user_id : $client->inputUserEmpty(),
);
```
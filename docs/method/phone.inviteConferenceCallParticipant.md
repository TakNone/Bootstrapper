# phone.inviteConferenceCallParticipant

**Layer** : 211

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
		id : -1542026150194318209,
		access_hash : -6997090698446407725,
	),
	user_id : $client->inputUserEmpty(),
);
```
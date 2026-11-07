# phone.inviteToGroupCall

**Description** : *Invite a set of users to a video chat/livestream &raquo;; cannot be used for live stories &raquo; or conference calls &raquo;*

**Layer** : 233

```tl
phone.inviteToGroupCall#7b393160 call:InputGroupCall users:Vector<InputUser> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The video chat/livestream » |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | The users to invite |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_TYPE_INVALID** | `403` | The specified user type is invalid |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **INVITE_FORBIDDEN_WITH_JOINAS** | `400` | If the user has anonymously joined a group call as a channel, they can't invite other users to the group call because that would cause deanonymization, because the invite would be sent using the original user ID, not the anonymized channel ID |
| **USER_ALREADY_INVITED** | `400` | You have already invited this user |
| **USER_NOT_PARTICIPANT** | `403` | You're not a member of this supergroup/channel |

---

## Example

```php
$updates = $client->phone->inviteToGroupCall(
	call : $client->inputGroupCall(
		id : -1056748941560697001,
		access_hash : 3113476995735996375,
	),
	users : array($client->get_input_user(user : '@TakNone')),
);
```
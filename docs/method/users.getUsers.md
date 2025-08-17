# users.getUsers

**Description** : *Returns basic user info according to their identifiers*

**Layer** : 211

```tl
users.getUsers#d91a548 id:Vector<InputUser> = Vector<User>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | List of user identifiers |

---

## Result

[Vector<User>](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **FROM_MESSAGE_BOT_DISABLED** | `400` | Bots can't use fromMessage min constructors |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$user = $client->users->getUsers(
	id : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -3516130358051599184,
			access_hash : 2515786329980390470,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 43,
			user_id : 7135736029977122389,
		),
	),
);
```
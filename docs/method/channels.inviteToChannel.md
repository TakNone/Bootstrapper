# channels.inviteToChannel

**Description** : *Invite users to a channel/supergroup*

**Layer** : 214

```tl
channels.inviteToChannel#c9e33d54 channel:InputChannel users:Vector<InputUser> = messages.InvitedUsers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | Users to invite |

---

## Result

[messages.InvitedUsers](type/messages.InvitedUsers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOTS_TOO_MUCH** | `400` | There are too many bots in this chat/channel |
| **BOT_GROUPS_BLOCKED** | `400` | This bot can't be added to groups |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_INVALID** | `400` | Invalid chat |
| **CHAT_MEMBER_ADD_FAILED** | `400` | Could not add participants |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USERS_TOO_MUCH** | `400` | The maximum number of users has been exceeded (to create a chat, for example) |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_BLOCKED** | `400` | User blocked |
| **USER_BOT** | `400` | Bots can only be admins in channels |
| **USER_CHANNELS_TOO_MUCH** | `403` | One of the users you tried to add is already in too many channels/supergroups |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_KICKED** | `400` | This user was kicked from this supergroup/channel |
| **USER_NOT_MUTUAL_CONTACT** | `403` | The provided user is not a mutual contact |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |

---

## Example

```php
$messagesInvitedUsers = $client->channels->inviteToChannel(
	channel : $client->inputChannelEmpty(),
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -318139067124020480,
			access_hash : -6463692140284385582,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 2,
			user_id : 3747049513778793036,
		),
	),
);
```
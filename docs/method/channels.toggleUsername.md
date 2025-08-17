# channels.toggleUsername

**Description** : *Activate or deactivate a purchased fragment.com username associated to a supergroup or channel we own*

**Layer** : 211

```tl
channels.toggleUsername#50f24105 channel:InputChannel username:string active:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup or channel |
| <mark>username</mark> | [`string`](type/string) | Username |
| <mark>active</mark> | [`Bool`](type/Bool) | Whether to activate or deactivate the username |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **USERNAMES_ACTIVE_TOO_MUCH** | `400` | The maximum number of active usernames was reached |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |

---

## Example

```php
$bool = $client->channels->toggleUsername(
	channel : $client->inputChannelEmpty(),
	username : 'TakNone',
	active : $client->boolFalse(),
);
```
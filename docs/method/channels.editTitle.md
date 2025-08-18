# channels.editTitle

**Description** : *Edit the name of a channel/supergroup*

**Layer** : 211

```tl
channels.editTitle#566decd0 channel:InputChannel title:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>title</mark> | [`string`](type/string) | New name |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_TITLE_EMPTY** | `400` | No chat title provided |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |

---

## Example

```php
$updates = $client->channels->editTitle(
	channel : $client->inputChannelEmpty(),
	title : 'unS10CPpoTDZL7Nd',
);
```
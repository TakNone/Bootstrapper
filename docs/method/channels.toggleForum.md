# channels.toggleForum

**Description** : *Enable or disable forum functionality in a supergroup*

**Layer** : 211

```tl
channels.toggleForum#3ff75734 channel:InputChannel enabled:Bool tabs:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable forum functionality |
| <mark>tabs</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_DISCUSSION_UNALLOWED** | `400` | You can't enable forum topics in a discussion group linked to a channel |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |

---

## Example

```php
$updates = $client->channels->toggleForum(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
	tabs : $client->boolFalse(),
);
```
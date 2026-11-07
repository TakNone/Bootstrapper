# channels.toggleForum

**Description** : *Enable or disable forum functionality in a supergroup*

**Layer** : 233

```tl
channels.toggleForum#a2952b54 channel:InputChannel enabled:Bool tabs:Bool sidebar:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable forum functionality |
| <mark>tabs</mark> | [`Bool`](type/Bool) | If true enables the tabbed forum UI, otherwise enables the list-based forum UI |
| <mark>sidebar</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_DISCUSSION_UNALLOWED** | `400` | You can't enable forum topics in a discussion group linked to a channel |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |

---

## Example

```php
$updates = $client->channels->toggleForum(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	enabled : false,
	tabs : false,
	sidebar : false,
);
```
# channels.toggleAntiSpam

**Description** : *Enable or disable the native antispam system*

**Layer** : 211

```tl
channels.toggleAntiSpam#68f3e4eb channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID. The specified supergroup must have at least telegram_antispam_group_size_min members to enable antispam functionality, as specified by the client configuration parameters |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable the native antispam system |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |

---

## Example

```php
$updates = $client->channels->toggleAntiSpam(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```
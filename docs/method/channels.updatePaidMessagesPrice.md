# channels.updatePaidMessagesPrice

**Description** : *Enable or disable paid messages &raquo; in this supergroup or monoforum*

**Layer** : 216

```tl
channels.updatePaidMessagesPrice#4b12327b flags:# broadcast_messages_allowed:flags.0?true channel:InputChannel send_paid_messages_stars:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **broadcast_messages_allowed** | [`flags.0?true`](type/true) | Only usable for channels, enables or disables the associated monoforum aka direct messages |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Pass the supergroup ID for supergroups and the ID of the channel to modify the setting in the associated monoforum |
| <mark>send_paid_messages_stars</mark> | [`long`](type/long) | Specifies the required amount of Telegram Stars users must pay to send messages to the supergroup or monoforum |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **STARS_AMOUNT_INVALID** | `400` | The specified amount in stars is invalid |

---

## Example

```php
$updates = $client->channels->updatePaidMessagesPrice(
	broadcast_messages_allowed : true,
	channel : $client->inputChannelEmpty(),
	send_paid_messages_stars : 314082531181889664,
);
```
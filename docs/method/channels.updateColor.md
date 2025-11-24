# channels.updateColor

**Description** : *Update the accent color and background custom emoji &raquo; of a channel*

**Layer** : 218

```tl
channels.updateColor#d8aa3671 flags:# for_profile:flags.1?true channel:InputChannel color:flags.2?int background_emoji_id:flags.0?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_profile** | [`flags.1?true`](type/true) | Whether to change the accent color emoji pattern of the profile page; otherwise, the accent color and emoji pattern of messages will be changed. Channels can change both message and profile palettes; supergroups can only change the profile palette, of course after reaching the appropriate boost level |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel whose accent color should be changed |
| **color** | [`flags.2?int`](type/int) | ID of the accent color palette » to use (not RGB24, see here » for more info); if not set, the default palette is used |
| **background_emoji_id** | [`flags.0?long`](type/long) | Custom emoji ID used in the accent color pattern |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->channels->updateColor(
	for_profile : true,
	channel : $client->get_input_channel(channel : '@LiveProto'),
	color : 8,
	background_emoji_id : 3490476497479853521,
);
```
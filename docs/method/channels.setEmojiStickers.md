# channels.setEmojiStickers

**Description** : *Set a custom emoji stickerset for supergroups. Only usable after reaching at least the boost level » specified in the group_emoji_stickers_level_min » config parameter*

**Layer** : 211

```tl
channels.setEmojiStickers#3cd930b7 channel:InputChannel stickerset:InputStickerSet = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | The custom emoji stickerset to associate to the supergroup |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$bool = $client->channels->setEmojiStickers(
	channel : $client->inputChannelEmpty(),
	stickerset : $client->inputStickerSetEmpty(),
);
```
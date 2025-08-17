# channelAdminLogEventActionChangeEmojiStickerSet

**Description** : *The supergroup's custom emoji stickerset was changed*

**Layer** : 211

```tl
channelAdminLogEventActionChangeEmojiStickerSet#46d840ab prev_stickerset:InputStickerSet new_stickerset:InputStickerSet = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Old value |
| <mark>new_stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | New value |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeEmojiStickerSet(
	prev_stickerset : $client->inputStickerSetEmpty(),
	new_stickerset : $client->inputStickerSetEmpty(),
);
```
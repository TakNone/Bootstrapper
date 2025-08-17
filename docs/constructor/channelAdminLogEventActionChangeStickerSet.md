# channelAdminLogEventActionChangeStickerSet

**Description** : *The supergroup's stickerset was changed*

**Layer** : 211

```tl
channelAdminLogEventActionChangeStickerSet#b1c3caa7 prev_stickerset:InputStickerSet new_stickerset:InputStickerSet = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Previous stickerset |
| <mark>new_stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | New stickerset |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeStickerSet(
	prev_stickerset : $client->inputStickerSetEmpty(),
	new_stickerset : $client->inputStickerSetEmpty(),
);
```
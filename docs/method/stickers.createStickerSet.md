# stickers.createStickerSet

**Description** : *Create a stickerset*

**Layer** : 214

```tl
stickers.createStickerSet#9021ab67 flags:# masks:flags.0?true emojis:flags.5?true text_color:flags.6?true user_id:InputUser title:string short_name:string thumb:flags.2?InputDocument stickers:Vector<InputStickerSetItem> software:flags.3?string = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **masks** | [`flags.0?true`](type/true) | Whether this is a mask stickerset |
| **emojis** | [`flags.5?true`](type/true) | Whether this is a custom emoji stickerset |
| **text_color** | [`flags.6?true`](type/true) | Whether the color of TGS custom emojis contained in this set should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context. For custom emoji stickersets only |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Stickerset owner |
| <mark>title</mark> | [`string`](type/string) | Stickerset name, 1-64 chars |
| <mark>short_name</mark> | [`string`](type/string) | Short name of sticker set, to be used in sticker deep links ». Can contain only english letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and, if called by a bot, must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters |
| **thumb** | [`flags.2?InputDocument`](type/InputDocument) | Thumbnail |
| <mark>stickers</mark> | [`Vector<InputStickerSetItem>`](type/InputStickerSetItem) | Stickers |
| **software** | [`flags.3?string`](type/string) | Used when importing stickers using the sticker import SDKs, specifies the name of the software that created the stickers |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PACK_SHORT_NAME_INVALID** | `400` | Short pack name invalid |
| **PACK_SHORT_NAME_OCCUPIED** | `400` | A stickerpack with this name already exists |
| **PACK_TITLE_INVALID** | `400` | The stickerpack title is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STICKERS_EMPTY** | `400` | No sticker provided |
| **STICKER_EMOJI_INVALID** | `400` | Sticker emoji invalid |
| **STICKER_FILE_INVALID** | `400` | Sticker file invalid |
| **STICKER_GIF_DIMENSIONS** | `400` | The specified video sticker has invalid dimensions |
| **STICKER_PNG_DIMENSIONS** | `400` | Sticker png dimensions invalid |
| **STICKER_PNG_NOPNG** | `400` | One of the specified stickers is not a valid PNG file |
| **STICKER_TGS_NODOC** | `400` | You must send the animated sticker as a document |
| **STICKER_TGS_NOTGS** | `400` | Invalid TGS sticker provided |
| **STICKER_THUMB_PNG_NOPNG** | `400` | Incorrect stickerset thumb file provided, PNG / WEBP expected |
| **STICKER_THUMB_TGS_NOTGS** | `400` | Incorrect stickerset TGS thumb file provided |
| **STICKER_VIDEO_BIG** | `400` | The specified video sticker is too big |
| **STICKER_VIDEO_NODOC** | `400` | You must send the video sticker as a document |
| **STICKER_VIDEO_NOWEBM** | `400` | The specified video sticker is not in webm format |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesStickerSet = $client->stickers->createStickerSet(
	masks : true,
	emojis : true,
	text_color : true,
	user_id : $client->inputUserEmpty(),
	title : 'cQbkXnTh27JG1MuZ',
	short_name : 'sdK6tVAvTXb9iJ0D',
	thumb : $client->inputDocumentEmpty(),
	stickers : array(
		$client->inputStickerSetItem(
			document : $client->inputDocumentEmpty(),
			emoji : 'pt0l1gnLMRDZfXCB',
			mask_coords : $client->maskCoords(
				n : 50,
				x : -99649.7763671875,
				y : 1029432.7822265625,
				zoom : -871553.9287109375,
			),
			keywords : 'JFl5TmODpvsyUE0r',
		),
	),
	software : 'EP8wNzXKlUsWqBDn',
);
```
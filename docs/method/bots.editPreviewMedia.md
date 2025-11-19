# bots.editPreviewMedia

**Description** : *Edit a main mini app preview, see here &raquo; for more info*

**Layer** : 218

```tl
bots.editPreviewMedia#8525606f bot:InputUser lang_code:string media:InputMedia new_media:InputMedia = BotPreviewMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | ISO 639-1 language code, indicating the localization of the preview to edit |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The photo/video preview to replace, previously fetched as specified here » |
| <mark>new_media</mark> | [`InputMedia`](type/InputMedia) | The new photo/video preview, uploaded using messages.uploadMedia |

---

## Result

[BotPreviewMedia](type/BotPreviewMedia)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$botPreviewMedia = $client->bots->editPreviewMedia(
	bot : $client->get_input_user(user : '@TakNone'),
	lang_code : 'i2uER0S4YPZxQeml',
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	new_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
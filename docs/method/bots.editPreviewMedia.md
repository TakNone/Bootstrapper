# bots.editPreviewMedia

**Description** : *Edit a main mini app preview, see here » for more info*

**Layer** : 211

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
	bot : $client->inputUserEmpty(),
	lang_code : 'wKLGOhB07RkoVSyr',
	media : $client->inputMediaEmpty(),
	new_media : $client->inputMediaEmpty(),
);
```
# bots.addPreviewMedia

**Description** : *Add a main mini app preview, see here &raquo; for more info*

**Layer** : 218

```tl
bots.addPreviewMedia#17aeb75a bot:InputUser lang_code:string media:InputMedia = BotPreviewMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | ISO 639-1 language code, indicating the localization of the preview to add |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The photo/video preview, uploaded using messages.uploadMedia |

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
$botPreviewMedia = $client->bots->addPreviewMedia(
	bot : $client->get_input_user(user : '@TakNone'),
	lang_code : '2W7UTkBwbjFyav6R',
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```
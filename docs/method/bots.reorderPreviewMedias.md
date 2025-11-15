# bots.reorderPreviewMedias

**Description** : *Reorder a main mini app previews, see here &raquo; for more info*

**Layer** : 218

```tl
bots.reorderPreviewMedias#b627f3aa bot:InputUser lang_code:string order:Vector<InputMedia> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | ISO 639-1 language code, indicating the localization of the previews to reorder |
| <mark>order</mark> | [`Vector<InputMedia>`](type/InputMedia) | New order of the previews |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->bots->reorderPreviewMedias(
	bot : $client->get_input_user(peer : '@TakNone'),
	lang_code : 'T0LcjMwt7SfXy94h',
	order : array($client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT)),
);
```
# bots.getPreviewInfo

**Description** : *Bot owners only, fetch main mini app preview information, see here &raquo; for more info*

**Layer** : 216

```tl
bots.getPreviewInfo#423ab3ad bot:InputUser lang_code:string = bots.PreviewInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |
| <mark>lang_code</mark> | [`string`](type/string) | Fetch previews for the specified ISO 639-1 language code |

---

## Result

[bots.PreviewInfo](type/bots.PreviewInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$botsPreviewInfo = $client->bots->getPreviewInfo(
	bot : $client->inputUserEmpty(),
	lang_code : 'tkN0Fcx6KwAQn4ar',
);
```
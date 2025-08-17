# bots.previewInfo

**Description** : *Contains info about Main Mini App previews, see here » for more info*

**Layer** : 211

```tl
bots.previewInfo#ca71d64 media:Vector<BotPreviewMedia> lang_codes:Vector<string> = bots.PreviewInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>media</mark> | [`Vector<BotPreviewMedia>`](type/BotPreviewMedia) | All preview medias for the language code passed to bots.getPreviewInfo |
| <mark>lang_codes</mark> | [`Vector<string>`](type/string) | All available language codes for which preview medias were uploaded (regardless of the language code passed to bots.getPreviewInfo) |

---

## Type

[bots.PreviewInfo](type/bots.PreviewInfo)

---

## Example

```php
$botsPreviewInfo = $client->bots->previewInfo(
	media : array(
		$client->botPreviewMedia(
			date : 66,
			media : $client->messageMediaEmpty(),
		),
	),
	lang_codes : array('aBzo536WrVfLKxSc'),
);
```
# pageBlockAudio

**Description** : *Audio*

**Layer** : 214

```tl
pageBlockAudio#804361ea audio_id:long caption:PageCaption = PageBlock;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>audio_id</mark> | [`long`](type/long) | Audio ID (to be fetched from the container page constructor |
| <mark>caption</mark> | [`PageCaption`](type/PageCaption) | Audio caption |

---

## Type

[PageBlock](type/PageBlock)

---

## Example

```php
$pageBlock = $client->pageBlockAudio(
	audio_id : -1648898939345386205,
	caption : $client->pageCaption(
		text : $client->textEmpty(),
		credit : $client->textEmpty(),
	),
);
```
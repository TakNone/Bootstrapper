# messageMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 218

```tl
messageMediaPaidMedia#a8852491 stars_amount:long extended_media:Vector<MessageExtendedMedia> = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stars_amount</mark> | [`long`](type/long) | The price of the media in Telegram Stars |
| <mark>extended_media</mark> | [`Vector<MessageExtendedMedia>`](type/MessageExtendedMedia) | Either the paid-for media, or super low resolution media previews if the media wasn't purchased yet, see here » for more info |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPaidMedia(
	stars_amount : 4013811123887435555,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 83,
			h : 98,
			thumb : $client->photoSizeEmpty(
				type : 'Zy5hrjpva3NGkSKz',
			),
			video_duration : 85,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```
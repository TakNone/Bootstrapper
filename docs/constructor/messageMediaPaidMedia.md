# messageMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 225

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
	stars_amount : 2949937747889349537,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 100,
			h : 85,
			thumb : $client->photoSizeEmpty(
				type : 'wWStAfTaX93hOBD4',
			),
			video_duration : 68,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```
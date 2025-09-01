# messageMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 214

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
	stars_amount : 5699910846862721432,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 0,
			h : 60,
			thumb : $client->photoSizeEmpty(
				type : 'pPy4s6uv5iOdT9Vf',
			),
			video_duration : 61,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```
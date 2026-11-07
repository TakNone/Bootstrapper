# messageMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 229

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
	stars_amount : -4961970614874610790,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 29,
			h : 46,
			thumb : $client->photoSizeEmpty(
				type : 'PjrX1OgH3E9AouYw',
			),
			video_duration : 33,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```
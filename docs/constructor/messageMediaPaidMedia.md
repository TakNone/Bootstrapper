# messageMediaPaidMedia

**Description** : *Paid media, see here » for more info*

**Layer** : 211

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
	stars_amount : -4473295730740740170,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 94,
			h : 16,
			thumb : $client->photoSizeEmpty(
				type : 'DfbsWAdFXqaVu2G1',
			),
			video_duration : 22,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```
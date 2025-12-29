# inputMediaPaidMedia

**Description** : *Paid media, see here &raquo; for more info*

**Layer** : 218

```tl
inputMediaPaidMedia#c4103386 flags:# stars_amount:long extended_media:Vector<InputMedia> payload:flags.0?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>stars_amount</mark> | [`long`](type/long) | The price of the media in Telegram Stars |
| <mark>extended_media</mark> | [`Vector<InputMedia>`](type/InputMedia) | Photos or videos |
| **payload** | [`flags.0?string`](type/string) | Bots only, specifies a custom payload that will then be passed in updateBotPurchasedPaidMedia when a payment is made (this field will not be visible to the user) |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPaidMedia(
	stars_amount : -5686558323353931342,
	extended_media : array($client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT)),
	payload : 'o9RiqAcDml1buST3',
);
```
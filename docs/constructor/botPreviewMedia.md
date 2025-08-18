# botPreviewMedia

**Description** : *Represents a Main Mini App preview media, see here &raquo; for more info*

**Layer** : 211

```tl
botPreviewMedia#23e91ba3 date:int media:MessageMedia = BotPreviewMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | When was this media last updated |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | The actual photo/video |

---

## Type

[BotPreviewMedia](type/BotPreviewMedia)

---

## Example

```php
$botPreviewMedia = $client->botPreviewMedia(
	date : 10,
	media : $client->messageMediaEmpty(),
);
```
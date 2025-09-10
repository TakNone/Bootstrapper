# messageExtendedMedia

**Description** : *Already purchased paid media, see here &raquo; for more info*

**Layer** : 214

```tl
messageExtendedMedia#ee479c64 media:MessageMedia = MessageExtendedMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | The media we purchased |

---

## Type

[MessageExtendedMedia](type/MessageExtendedMedia)

---

## Example

```php
$messageExtendedMedia = $client->messageExtendedMedia(
	media : $client->messageMediaEmpty(),
);
```
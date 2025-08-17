# messageExtendedMedia

**Description** : *Already purchased paid media, see here » for more info*

**Layer** : 211

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
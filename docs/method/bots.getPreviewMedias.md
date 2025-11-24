# bots.getPreviewMedias

**Description** : *Fetch main mini app previews, see here &raquo; for more info*

**Layer** : 218

```tl
bots.getPreviewMedias#a2a5594d bot:InputUser = Vector<BotPreviewMedia>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Main Mini App |

---

## Result

[Vector<BotPreviewMedia>](type/BotPreviewMedia)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$botPreviewMedia = $client->bots->getPreviewMedias(
	bot : $client->get_input_user(user : '@TakNone'),
);
```
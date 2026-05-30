# sendMessageEmojiInteractionSeen

**Description** : *User is watching an animated emoji reaction triggered by another user, click here for more info &raquo;*

**Layer** : 225

```tl
sendMessageEmojiInteractionSeen#b665902e emoticon:string = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageEmojiInteractionSeen(
	emoticon : 'kP30XHaDc2G8m7N6',
);
```
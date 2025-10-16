# sendMessageEmojiInteractionSeen

**Description** : *User is watching an animated emoji reaction triggered by another user, click here for more info &raquo;*

**Layer** : 216

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
	emoticon : '1GEbIqamwgVy2dAJ',
);
```
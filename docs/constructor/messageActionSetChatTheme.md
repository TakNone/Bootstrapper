# messageActionSetChatTheme

**Description** : *The chat theme was changed*

**Layer** : 214

```tl
messageActionSetChatTheme#b91bbd3a theme:ChatTheme = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>theme</mark> | [`ChatTheme`](type/ChatTheme) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetChatTheme(
	theme : $client->chatTheme(
		emoticon : 'xDbW8IQK6f2mNVLk',
	),
);
```
# messageActionSetChatTheme

**Description** : *The chat theme was changed*

**Layer** : 216

```tl
messageActionSetChatTheme#b91bbd3a theme:ChatTheme = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>theme</mark> | [`ChatTheme`](type/ChatTheme) | The new chat theme |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetChatTheme(
	theme : $client->chatTheme(
		emoticon : 'R1CcgMfWGphYT08N',
	),
);
```
# messageActionSetChatTheme

**Description** : *The chat theme was changed*

**Layer** : 211

```tl
messageActionSetChatTheme#aa786345 emoticon:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji that identifies a chat theme |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetChatTheme(
	emoticon : '7apIHzXwGUintKkC',
);
```
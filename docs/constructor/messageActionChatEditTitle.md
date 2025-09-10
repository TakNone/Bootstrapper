# messageActionChatEditTitle

**Description** : *Group name changed*

**Layer** : 214

```tl
messageActionChatEditTitle#b5a1ce5a title:string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | New group name |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatEditTitle(
	title : 'tMRCYgQqu0yVpvxU',
);
```
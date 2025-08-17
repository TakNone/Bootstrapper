# messageActionChatCreate

**Description** : *Group created*

**Layer** : 211

```tl
messageActionChatCreate#bd47cbad title:string users:Vector<long> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Group name |
| <mark>users</mark> | [`Vector<long>`](type/long) | List of group members |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatCreate(
	title : 'K1AGF4yQJe3vVM6s',
	users : array(-7722759447296638030),
);
```
# messageActionChatCreate

**Description** : *Group created*

**Layer** : 222

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
	title : '2iTU5ZQWrb4emVKF',
	users : array(3711599684696073152),
);
```
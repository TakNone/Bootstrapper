# messageActionChatCreate

**Description** : *Group created*

**Layer** : 218

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
	title : 'ZLCzU3HoJfygueth',
	users : array(3398899372762613946),
);
```
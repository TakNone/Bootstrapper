# messages.getPersonalChannelHistory

**Layer** : 225

```tl
messages.getPersonalChannelHistory#55fb0996 user_id:InputUser limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |
| <mark>max_id</mark> | [`int`](type/int) | NOTHING |
| <mark>min_id</mark> | [`int`](type/int) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getPersonalChannelHistory(
	user_id : $client->get_input_user(user : '@TakNone'),
	limit : 91,
	max_id : 21,
	min_id : 80,
	hash : 0,
);
```
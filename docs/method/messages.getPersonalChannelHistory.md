# messages.getPersonalChannelHistory

**Description** : *Fetch the message history of a user&#039;s personal channel &raquo;*

**Layer** : 233

```tl
messages.getPersonalChannelHistory#55fb0996 user_id:InputUser limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user whose personal channel history to fetch |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>max_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with IDs less than max_id |
| <mark>min_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with IDs more than min_id |
| <mark>hash</mark> | [`long`](type/long) | Result hash |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getPersonalChannelHistory(
	user_id : $client->get_input_user(user : '@TakNone'),
	limit : 50,
	max_id : 57,
	min_id : 47,
	hash : 0,
);
```
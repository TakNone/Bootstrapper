# updateEncryptedMessagesRead

**Description** : *Communication history in an encrypted chat was marked as read*

**Layer** : 211

```tl
updateEncryptedMessagesRead#38fe25b7 chat_id:int max_date:int date:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`int`](type/int) | Chat ID |
| <mark>max_date</mark> | [`int`](type/int) | Maximum value of data for read messages |
| <mark>date</mark> | [`int`](type/int) | Time when messages were read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEncryptedMessagesRead(
	chat_id : 84,
	max_date : 38,
	date : 25,
);
```
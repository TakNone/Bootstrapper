# updateReadChannelDiscussionOutbox

**Description** : *Outgoing comments in a discussion thread were marked as read*

**Layer** : 216

```tl
updateReadChannelDiscussionOutbox#695c9e7c channel_id:long top_msg_id:int read_max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Supergroup ID |
| <mark>top_msg_id</mark> | [`int`](type/int) | ID of the group message that started the thread |
| <mark>read_max_id</mark> | [`int`](type/int) | Message ID of latest read outgoing message for this thread |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadChannelDiscussionOutbox(
	channel_id : 392667732497359494,
	top_msg_id : 31,
	read_max_id : 87,
);
```
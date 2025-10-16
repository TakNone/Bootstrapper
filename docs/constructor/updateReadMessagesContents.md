# updateReadMessagesContents

**Description** : *Contents of messages in the common message box were read \(emitted specifically for messages like voice messages or video, only once the media is watched and marked as read using messages\.readMessageContents\)*

**Layer** : 216

```tl
updateReadMessagesContents#f8227181 flags:# messages:Vector<int> pts:int pts_count:int date:flags.0?int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>messages</mark> | [`Vector<int>`](type/int) | IDs of read messages |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |
| **date** | [`flags.0?int`](type/int) | When was the last message in messages marked as read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadMessagesContents(
	messages : array(36),
	pts : 24,
	pts_count : 39,
	date : 98,
);
```
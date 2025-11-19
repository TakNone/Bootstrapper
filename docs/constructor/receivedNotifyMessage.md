# receivedNotifyMessage

**Description** : *Message ID, for which PUSH\-notifications were cancelled*

**Layer** : 218

```tl
receivedNotifyMessage#a384b779 id:int flags:int = ReceivedNotifyMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Message ID, for which PUSH-notifications were canceled |
| <mark>flags</mark> | [`int`](type/int) | Reserved for future use |

---

## Type

[ReceivedNotifyMessage](type/ReceivedNotifyMessage)

---

## Example

```php
$receivedNotifyMessage = $client->receivedNotifyMessage(
	id : 14,
	flags : 98,
);
```
# messageActionSetMessagesTTL

**Description** : *The Time\-To\-Live of messages in this chat was changed*

**Layer** : 216

```tl
messageActionSetMessagesTTL#3c134d7b flags:# period:int auto_setting_from:flags.0?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>period</mark> | [`int`](type/int) | New Time-To-Live of all messages sent in this chat; if 0, autodeletion was disabled |
| **auto_setting_from** | [`flags.0?long`](type/long) | If set, the chat TTL setting was set not due to a manual change by one of participants, but automatically because one of the participants has the default TTL settings enabled ». For example, when a user writes to us for the first time and we have set a default messages TTL of 1 week, this service message (with auto_setting_from=our_userid) will be emitted before our first message |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetMessagesTTL(
	period : 10,
	auto_setting_from : 7642033512460120819,
);
```
# businessAwayMessage

**Description** : *Describes a Telegram Business away message, automatically sent to users writing to us when we&#039;re offline, during closing hours, while we&#039;re on vacation, or in some other custom time period when we cannot immediately answer to the user*

**Layer** : 214

```tl
businessAwayMessage#ef156a5c flags:# offline_only:flags.0?true shortcut_id:int schedule:BusinessAwayMessageSchedule recipients:BusinessRecipients = BusinessAwayMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **offline_only** | [`flags.0?true`](type/true) | If set, the messages will not be sent if the account was online in the last 10 minutes |
| <mark>shortcut_id</mark> | [`int`](type/int) | ID of a quick reply shorcut, containing the away messages to send, see here » for more info |
| <mark>schedule</mark> | [`BusinessAwayMessageSchedule`](type/BusinessAwayMessageSchedule) | Specifies when should the away messages be sent |
| <mark>recipients</mark> | [`BusinessRecipients`](type/BusinessRecipients) | Allowed recipients for the away messages |

---

## Type

[BusinessAwayMessage](type/BusinessAwayMessage)

---

## Example

```php
$businessAwayMessage = $client->businessAwayMessage(
	offline_only : true,
	shortcut_id : 68,
	schedule : $client->businessAwayMessageScheduleAlways(),
	recipients : $client->businessRecipients(
		existing_chats : true,
		new_chats : true,
		contacts : true,
		non_contacts : true,
		exclude_selected : true,
		users : array(8795485952536926757),
	),
);
```